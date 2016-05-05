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

        $query = $this->db->get_where('garvhai_adminuser', array('user_email' => $username, 'user_pass' => md5($userpass)));
        return $query->row_array();
	}

    public function get_players($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $this->db->select('id, name');
            $query = $this->db->get('garvhai_players');
            return $query->result_array();
        }
        $query = $this->db->get_where('garvhai_players', array('id' => $slug));
        return $query->row_array();
    }


    public function get_table()
    {
        $query = $this->db->query('SELECT * FROM news');
        /*var_dump($query->result_array());
        exit;*/
        return $query->result_array();
    }

    public function addplayer($upload_data)
    {
        $this->load->helper('url');
        $data = array(
            'name' => $this->input->post('playername'),
            'profile_photo' => $upload_data['upload_data']['file_name'],
            'contest' => $this->input->post('contest'),
            'championship' => $this->input->post('championship')
            //'slug' => $slug,
            //'text' => $this->input->post('text')
        );

        return $this->db->insert('garvhai_players', $data);
    }

    public function deleteplayer($player_id)
    {
        return $this->db->delete('garvhai_players', array('id' => $player_id)); 
    }
}