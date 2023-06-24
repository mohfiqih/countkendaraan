<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function is_username_exists($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }

    public function register_user($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $this->db->insert('user', $data);
    }
}