<?php 
	session_start();

	function userLoggedIn() {
		if (isset($_SESSION['user_role'])) {
			return true;
		} else {
			return false;
		}
	}
?>