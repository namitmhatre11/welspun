<?php
	class Admin extends CI_Controller {
		function __construct()
        {
            parent::__construct();
            //$this->load->model('news_model');
            $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['title'] = 'Admin Login';

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin_footer');
        }
	}