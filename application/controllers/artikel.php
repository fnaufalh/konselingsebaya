<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {


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
		$data['artikel'] = $this->m_content->artikel();
		$this->load->view('navbar', $data);
		$this->load->view('artikel');
		$this->load->view('footer');
	}

	public function baca($id)
	{
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   }
	   $data['artikel'] = $this->m_content->artikel();
	   $data['konselor'] = $this->m_users->konselor();
	   $data['baca'] = $this->m_content->baca_by_id($id);
		$this->load->view('navbar', $data);
		$this->load->view('baca');
		$this->load->view('footer');
	}
}
