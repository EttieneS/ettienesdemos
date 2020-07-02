<?php
class Login_model extends CI_Model {
    // public function __construct()
    // {
    //    parent::__construct();
    // }

    public function log_in_correctly() {
        $this->db->where('user_name', $this->input->post('username'));
        $this->db->where('user_pass', $this->input->post('password'));
        $query = $this->db->get('users');

        if ($query->num_rows() == 1)
        {
            return true;
        } else {
            return false;
        }
    }
}
?>
