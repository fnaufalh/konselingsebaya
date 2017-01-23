<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	     $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/index');
		 $this->load->view('dashboard/footer');
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function pengantar()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['pengantar'] = $this->m_content->pengantar();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/pengantar');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function sejarah()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['sejarah'] = $this->m_content->sejarah();
	     $data['visimisi'] = $this->m_content->visimisi();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/sejarah');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function siapa()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['siapa'] = $this->m_content->siapa();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/siapa');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function kategori()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['kategori'] = $this->m_content->kategori();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/kategori');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function pengguna()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['jabatan'] = $this->m_users->jabatan();
	     $data['pengguna'] = $this->m_users->pengguna();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/pengguna');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function faq()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['faq'] = $this->m_content->faq();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/faq');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function konsul()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     // $data['konsul'] = $this->m_content->konsul();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/konsul');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function artikel()
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['artikel'] = $this->m_content->artikel();
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/artikel');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}


	public function edit_kategori($id)
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['kategori'] = $this->m_content->kategori_by_id($id);
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/edit_kategori');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}
	
	public function edit_pengguna($id)
	{
		if($this->session->userdata('logged_in'))
	   {
	   	 $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['USERNAME'];
	     $data['webpage'] = 'NULL';

	     $data['pengguna'] = $this->m_users->pengguna_by_id($id);
		 $this->load->view('dashboard/navbar', $data);
		 $this->load->view('dashboard/edit_pengguna');
		 $this->load->view('dashboard/footer');
		}
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	function logout()
	 {
	   if($this->session->unset_userdata('logged_in'))
	   {
		   session_destroy();
		   redirect('login', 'refresh');
	 	}else{
			redirect('login', 'refresh');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */