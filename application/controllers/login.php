<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('m_users','',TRUE);
			   $this->load->model('m_content');
			 }
		 
		 function index()
			 {
			if($this->session->userdata('logged_in'))
	   		{
				$session_data = $this->session->userdata('logged_in');
			    $data['username'] = $session_data['USERNAME'];
			    $data['webpage'] = 'NULL';
	   		}else{
	   			$data['username'] = NULL;
	   		}

			 	$this->load->view('navbar', $data);
			    $this->load->view('login');
			    $this->load->view('footer');
			 }
}