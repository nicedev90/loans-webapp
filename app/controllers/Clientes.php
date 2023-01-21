<?php 
	class Clientes extends Controller {
		private $cliente;

		public function __construct() {
			$this->cliente = $this->model('Cliente');
		}

		public function index() {
			if (userLoggedIn() && $_SESSION['user_role'] == "Cliente") {
				$this->view('cliente/index');
			} else {
				$this->view('pages/error');
			}
		}

	}
?>