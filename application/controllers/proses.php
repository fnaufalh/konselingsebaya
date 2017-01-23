<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proses extends CI_Controller {

	function __construct()
	 {
	   parent::__construct();
	   $this->load->model('m_users');
	   $this->load->model('m_post');
	 }

	function index(){

	}

	function pengantar(){
		$pengantar = $this->input->post('foreword');
		$p = $this->m_post->pengantar($pengantar);
		if ($p === TRUE) {
			redirect('status/sukses', 'refresh');
		}else{
			redirect('status/gagal', 'refresh');
		}
	}

	function sejarah(){
		$sejarah = $this->input->post('history');
		$visimisi = $this->input->post('visionandmission');
		$p = $this->m_post->sejarah($sejarah);
		$p2 = $this->m_post->visimisi($visimisi);
		if ($p === TRUE && $p2 === TRUE) {
			redirect('status/sukses', 'refresh');
		}else{
			redirect('status/gagal', 'refresh');
		}
	}

	function siapa(){
		$siapa = $this->input->post('who');
		$p = $this->m_post->siapa($siapa);
		if ($p === TRUE) {
			redirect('status/sukses', 'refresh');
		}else{
			redirect('status/gagal', 'refresh');
		}
	}

	function kategori(){
		$kategori = $this->input->post('category');
		$p = $this->m_post->kategori($kategori);
		if ($p === TRUE) {
			redirect('dashboard/kategori', 'refresh');
		}
	}

	function hapus_kategori($id){
		$p = $this->m_post->hapus_kategori($id);
		if ($p === TRUE) {
			redirect('dashboard/kategori', 'refresh');
		}
	}

	function edit_kategori($id){
		$kategori = $this->input->post('category');
		$p = $this->m_post->edit_kategori($id, $kategori);
		if ($p === TRUE) {
			redirect('dashboard/kategori', 'refresh');
		}
	}

	function hapus_pengguna($id){
		$p = $this->m_users->hapus_pengguna($id);
		if ($p === TRUE) {
			redirect('dashboard/pengguna', 'refresh');
		}
	}

	function faq(){
		$question = $this->input->post('question');
		$answer = $this->input->post('answer');
		$p = $this->m_post->faq($question, $answer);
		if ($p === TRUE) {
			redirect('dashboard/faq', 'refresh');
		}
	}
}