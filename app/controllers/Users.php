<?php 
	class Users extends Controller {
		public function __construct() {
			$this->model = $this->model('User');
		}

		public function index() {
			if (isset($_SESSION['user_role'])) {
				$userView = strtolower($_SESSION['user_role']);
				$this->view($userView . '/index');
			} else {
				$this->view('pages/login');
			}
		}

		public function forgot() {
			if (!isset($_SESSION['user_role'])) {
				$this->view('pages/forgot');
			} else {
				$userView = strtolower($_SESSION['user_role']);
				$this->view($userView . '/index');
			}
		}

		public function pending() {
			if (!isset($_SESSION['user_role'])) {
				$this->view('pages/pending');
			} else {
				$userView = strtolower($_SESSION['user_role']);
				$this->view($userView . '/index');
			}
		}

		public function login() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$form = [
					'email' => trim($_POST['email']),
					'pass' => trim($_POST['password']),
					'email_err' => '',
					'pass_err' => ''
				];

				if (empty($form['email'])) {
					$form['email_err'] = 'Ingrese un email válido.';
				}

				if (empty($form['pass'])) {
					$form['pass_err'] = 'Ingrese la contraseña.';
				}

				if ($this->model->findUserByEmail($form['email'])) {
					$form['email_err'] = '';
				} else {
					$form['email_err'] = 'Usuario no registrado.';
				}

				if (empty($form['email_err']) && empty($form['pass_err'])) {
					$userLoggedIn = $this->model->login($form['email'], $form['pass']);

					if ($userLoggedIn) {
						$userActive = $userLoggedIn->estado;

						if ($userActive == 'Activo') {
							$email = $userLoggedIn->email;
							$password = $userLoggedIn->password;
							$status = 'Exitoso';

							$this->createSession($userLoggedIn);
							$this->model->accessLog($email, $password, $status);
						} else {
							$email = $form['email'];
							$password = $form['pass'];
							$status = 'Fallido';

							$this->model->accessLog($email, $password, $status);

							$data = ['error' => 'El usuario no esta activo.'];
							$this->view('pages/login', $data);
						}
					} else {
						$email = $form['email'];
						$password = $form['pass'];
						$status = 'Fallido';

						$this->model->accessLog($email, $password, $status);
						
						$data = ['error' => 'La contraseña es incorrecta.'];
						$this->view('pages/login', $data);
					}
				} else {
					$email = $form['email'];
					$password = $form['pass'];
					$status = 'Fallido';

					$this->model->accessLog($email, $password, $status);

					$data = ['error' => 'Usuario no registrado.'];
					$this->view('pages/login', $data);
				}
			} else {
				// show login form if is not used $_POST
				$this->view('pages/login');
			}
		}

		public function forgotPassword() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$form = [
					'email' => trim($_POST['email']),
					'email' => ''
				];

				if (empty($form['email'])) {
					$form['email_err'] = 'Ingrese un correo.';
				}

				$userEmail = $this->model->findUserByEmail($form['email']);

				if (empty($form['email_err'])) {
					if ($userEmail) {
						$token = bin2Hex(random_bytes(50));

						$this->model->saveToken($form['email'], $token);
						$msg = "click on this <a href='https://myweb/pages/createPassword?token=' . $token . '> link </a> to reset password.";

						$data = ['email' => $_POST['email'] ];
						$this->view('pages/pending', $data);
					} else {
						$data = ['error' => 'Usuario no registrado.'];
						$this->view('pages/forgot', $data);
					}
				} else {
					$data = ['error' => 'Ingrese un email válido.'];
					$this->view('pages/forgot', $data);
				}
			} else {
				$this->view('pages/forgot');
			}
		}

		public function createSession($user) {
			$_SESSION['user_role'] = $user->role;
			$_SESSION['user_nombres'] = $user->nombres;
			$_SESSION['user_email'] = $user->email;

			if ($user->role == "Administrador") {
				redirect('administrador/index');
			}

			if ($user->role == 'Cliente') {
				redirect('clientes/index');
			}
		}

		public function logout() {
			unset($_SESSION['user_role']);
			unset($_SESSION['user_nombres']);
			unset($_SESSION['user_email']);

			session_destroy();
			redirect('users/login');
		}

	}
?>