<?php 
	class Admin {
		private $db;

		public function __construct() {
			$this->db = new Database;
		}

		
	}

	// clientes: Nuevo , buscar, Situacion
	// prestamos: nuevo, buscar, prestamos cancelados, buscar cuotas adeudadas, buscar cuotas vencidas
	// cobros: cobrar cuotas, cobrar prestamo completo, buscar
	// caja:pages/forgot

	// nombre usuario -> Mi ´perfil, nuevo usuario, modificar interes, cerrar sesion
?>