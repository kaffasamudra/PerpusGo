<?php
class M_users extends CI_Model {
	function get_user($email,$password) {
		$where = array(
			'email' => $email,
			'password' => $password,
		);
		$this->db->where($where);
		$query = $this->db->get('users')->result();
		foreach ($query as $key => $value) {
			return $value;
		}
	}
	public function insert_user($data) {
        return $this->db->insert('users', $data);
    }
}