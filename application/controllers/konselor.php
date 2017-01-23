<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konselor extends CI_Controller {


	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('m_users');
	 }

	public function index()
	{
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   } 
		$data['konselor'] = $this->m_users->konselor();
		$this->load->view('navbar', $data);
		$this->load->view('konselor');
		$this->load->view('footer');
	}
}
