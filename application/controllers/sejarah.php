<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sejarah extends CI_Controller {

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
		$data['sejarah'] = $this->m_content->sejarah();
		$data['visimisi'] = $this->m_content->visimisi();
		$this->load->view('navbar', $data);
		$this->load->view('sejarah');
		$this->load->view('footer');
	}
}