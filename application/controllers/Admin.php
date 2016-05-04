<?php
	class Admin extends CI_Controller {
		function __construct()
        {
            parent::__construct();
            //$this->load->model('news_model');
            $this->load->helper('url_helper');
            $this->load->library('session');
            $this->load->model('admin_model');
        }

        public function index()
        {
            $data['title'] = 'Admin Login';

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin_footer');
        }

        public function login(){
        	$data['title'] = 'Admin Dashbord';

        	$isuser = $this->admin_model->get_admin_user();
        	
        	if($isuser != NULL){
        		/*echo '<pre>';
        		print_r($isuser);
        		echo '</pre>';*/
        		$this->session->set_userdata('username', $isuser['user_name']);
        		$this->session->set_userdata('useremail', $isuser['user_email']);
        		/*$this->load->view('templates/admin_header', $data);
        		$this->load->view('admin/dashbord', $data);
            	$this->load->view('templates/admin_footer');*/
            	$this->dashbord();
        	}else{
        		$data['error'] = 'UserId password didn\'t match' ;

        		$this->load->view('templates/admin_header', $data);
	            $this->load->view('admin/index', $data);
	            $this->load->view('templates/admin_footer');
        	}
        }

        public function dashbord()
        {
        	if(isset($this->session->username)){
        		$data['title'] = 'Dashbord';

	            $data['players'] = $this->admin_model->get_players();

	            $this->load->view('templates/admin_header', $data);
	            $this->load->view('templates/admin_nav');
	    		$this->load->view('admin/dashbord', $data);
	    		$this->load->view('templates/nav_close');
	        	$this->load->view('templates/admin_footer');
        	}else{
        		$this->index();
        	}
        }

        public function logout(){
        	$this->session->sess_destroy();
        	$data['notice'] = 'You are logged out successfully!';
        	//$this->index();

        	$this->load->view('templates/admin_header', $data);
	        $this->load->view('admin/index', $data);
	        $this->load->view('templates/admin_footer');
        }

        public function add_player(){
        	$this->load->helper('form');
            $this->load->library('form_validation');

            $config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '100';
	        $config['max_width']  = '1024';
	        $config['max_height']  = '768';

        	$this->load->library('upload', $config);

        	$data['title'] = 'Add new player';

        	$this->form_validation->set_rules('playername', 'Player name', 'required');
            //$this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/admin_header');
	            $this->load->view('templates/admin_nav');
                $this->load->view('admin/addplayer', $data);
	    		$this->load->view('templates/nav_close');
                $this->load->view('templates/admin_footer');

            }
            else
            {
            	if( ! $this->upload->do_upload('userpic')){
            		$error = array('error' => $this->upload->display_errors());
            		$this->load->view('admin/addplayer', $error);
            	}else
				{
					$data['upload_data'] = $this->upload->data();
					$this->admin_model->addplayer($data);
					$data['notice'] = 'Player added successfully!';
					$this->load->view('templates/admin_header');
	            	$this->load->view('templates/admin_nav');
					$this->load->view('admin/addplayer', $data);
		    		$this->load->view('templates/nav_close');
	                $this->load->view('templates/admin_footer');
				}
            }
        }
	}