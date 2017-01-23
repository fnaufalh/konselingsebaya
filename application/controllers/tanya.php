<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanya extends CI_Controller {


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
		$data['profesional'] = $this->m_users->profesional();
		$this->load->view('navbar', $data);
		$this->load->view('tanya');
		$this->load->view('footer');
	}
}
