<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siapa extends CI_Controller {


	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('m_users');
	   $this->load->model('m_content');
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
		$data['siapa'] = $this->m_content->siapa();
		$this->load->view('navbar', $data);
		$this->load->view('siapa');
		$this->load->view('footer');
	}
}
