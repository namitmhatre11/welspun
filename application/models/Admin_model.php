<?php
class Admin_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_admin_user()
	{
        $this->load->helper('url');

        $username = $this->input->post('userEmail');
        $userpass = $this->input->post('userPass');

        $query = $this->db->get_where('adminuser', array('user_email' => $username, 'user_pass' => md5($userpass)));
        return $query->row_array();
	}

    public function get_players()
    {
        $this->load->helper('url');

        $this->db->select('id, name');
        $query = $this->db->get('players');

        return $query->result_array();
    }


    public function get_table()
    {
        $query = $this->db->query('SELECT * FROM news');
        /*var_dump($query->result_array());
        exit;*/
        return $query->result_array();
    }
}