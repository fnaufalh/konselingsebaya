<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends CI_Controller {
	public function sukses(){
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   }
		$this->load->view('navbar', $data);
		$this->load->view('sukses');
		$this->load->view('footer');
	}

	public function gagal(){
		if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['USERNAME'];
		    $data['webpage'] = 'NULL';
	   }else{
	   		$data['username'] = NULL;
	   }
		$this->load->view('navbar', $data);
		$this->load->view('gagal');
		$this->load->view('footer');
	}
}