<?php 
	class Administrador extends Controller {
		private $admin;

		public function __construct() {
			$this->admin = $this->model('Admin');
		}

		public function index() {
			if (userLoggedIn() && $_SESSION['user_role'] == "Administrador") {
				$this->view('administrador/index');
			} else {
				$this->view('pages/error');
			}
		}
	}
?>