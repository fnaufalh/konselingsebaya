<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
		 {
		   parent::__construct();
		   $this->load->model('m_users','',TRUE);
		 }

	public function index(){
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   }
		$this->load->view('navbar', $data);
		$this->load->view('daftar');
		$this->load->view('footer');
	}

	public function proses(){
		$p = $this->m_users->insertuser();
		if ($p === TRUE) {
			redirect('status/sukses', 'refresh');
		}else{
			redirect('status/gagal', 'refresh');
		}
	}

}