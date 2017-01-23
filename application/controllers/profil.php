<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('m_users');
	   $this->load->model('m_content');
	 }

public function index($id)
	{
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   }
	   $data['konselor'] = $this->m_users->konselor_by_id($id);
		$this->load->view('navbar', $data);
		$this->load->view('profil');
		$this->load->view('footer');
	}
}