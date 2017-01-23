<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller {


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
		$data['faq'] = $this->m_content->faq();
		$this->load->view('navbar', $data);
		$this->load->view('faq');
		$this->load->view('footer');
	}
}
