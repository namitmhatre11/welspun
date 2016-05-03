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
            $data['title'] = 'Dashbord';

            $data['players'] = $this->admin_model->get_players();

            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_nav');
    		$this->load->view('admin/dashbord', $data);
        	$this->load->view('templates/admin_footer');
        }
	}