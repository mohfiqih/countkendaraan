<?php
class User_model extends CI_Model
{
    public function get_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');
        return $query->row();
    }
}
?>