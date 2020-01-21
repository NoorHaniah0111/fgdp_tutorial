<?php
	
	class M_user extends CI_Model {

		public function view_user() {
			$sql = "SELECT * FROM t_users";
			$res = $this->db->query($sql);
			return $res->result_array();
		}

		public function add_user($user, $pass, $email, $role) {
			$sql = "INSERT INTO t_users (username, password, email, userrole)
					VALUES(?, ?, ?, ?)";

			$res = $this->db->query($sql, array($user, $pass, $email, $role));
			return $this->db->affected_rows();
		}

		public function get_selected_user($id) {
			$sql = "SELECT * FROM t_users WHERE id_user = ?";

			$res = $this->db->query($sql, array($id));
			return $res->result_array();
		}

		public function edit_user($user, $pass, $email, $role, $id) {
			$sql = "UPDATE t_users
					SET username = ?, password = ?, email = ?, userrole = ? WHERE id_user = ?";

			$res = $this->db->query($sql, array($user, $pass, $email, $role, $id));
			return$this->db->affected_rows();
		}

		public function delete_user($id) {
			$sql = "DELETE FROM t_users WHERE id_user = ?";
			$res = $this->db->query($sql, array($id));
			return $this->db->affected_rows();
		}
	}
	
?>