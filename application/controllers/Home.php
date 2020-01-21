<?php

	class Home extends CI_Controller {
		public function index() {
			echo "Ini Percobaan";
		}

		public function login($a,$b) {
			echo "Login sebagai : ".$a." ".$b;
		}
	}

?>