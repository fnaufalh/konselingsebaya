<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
  function __construct()
 {
   parent::__construct();
   $this->load->model('m_users','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
      if($this->session->userdata('logged_in')){
        redirect('dashboard', 'refresh');
      }else{
        // redirect('login', 'refresh');
        echo "haha";
      }
   }
   else
   {
     //Go to private area
     redirect('dashboard', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->m_users->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'ID'         => $row->ID,
         'USERNAME'   => $row->USERNAME,
         'FIRSTNAME'  => $row->FIRSTNAME,
         'LASTNAME'   => $row->LASTNAME,
         'TITLE'      => $row->TITLE,
         'IS_ACTIVE'  => $row->IS_ACTIVE,
         'BIRTHDATE'  => $row->BIRTHDATE,
         'STAT_EDU'   => $row->STAT_EDU
       );
       if ($sess_array['IS_ACTIVE'] == 0) {
         $this->form_validation->set_message('check_database', 'User is not active');
          return false;
       }else{
          $this->session->set_userdata('logged_in', $sess_array);
        }
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>