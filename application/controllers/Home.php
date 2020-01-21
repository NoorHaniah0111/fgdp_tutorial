<?php

	class Home extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('M_user');
		}

		public function index() {
			$data['user'] = $this->M_user->view_user();
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->load->view('home',$data);
			$this->load->view('template/footer');
		}

		public function add_user() {
			$this->load->view('template/header');
			$this->load->view('template/navbar');
			$this->load->view('add_user');
			$this->load->view('template/footer');
		}

		public function add_process() {
			if (isset($_POST['submit'])) {
				$user = $_POST['username'];
				$pass = md5 ($_POST['password']);
				$email = $_POST['email'];
				$role = $_POST['userrole'];

				$sql = $this->M_user->add_user($user, $pass, $email, $role);
					if ($sql == true) {
						redirect('home');
					} else {
						echo "Data Gagal Diinput";
					}
			}
		}

		public function edit_user($id) {
			$data['user'] = $this->M_user->get_selected_user($id);
			$count = count($data['user']);
				if ($count != 0) {
					$this->load->view('template/header');
					$this->load->view('template/navbar');
					$this->load->view('edit_user', $data);
					$this->load->view('template/footer');
				}

		}

		public function edit_process() {
			if (isset($_POST['submit'])) {
				$id = $_POST['id_user'];
				$user = $_POST['username'];
				$pass = md5 ($_POST['password']);
				$email = $_POST['email'];
				$role = $_POST['userrole'];

				$sql = $this->M_user->edit_user($user, $pass, $email, $role, $id);
					if ($sql == true) {
						redirect('home');
					} else {
						echo "Data Gagal Diinput";
					}
			}
		}
		

		public function delete_user($id) {
			$sql = $this->M_user->delete_user($id);
				if ($sql == true) {
						redirect('home');
					} else {
						echo "Data Gagal Dihapus";
					}
		}
	}

	

?>