<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_c extends CI_Controller
{

     function __construct()
     {
       parent::__construct();
       $this->load->model('Users_m','',TRUE);
     }

     function index()
     {

       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
       if(!$this->form_validation->run())
       {
        echo (1);
       }
       else
       {
         echo (0);
         //Go to private area
       }
    
     }
    
     function check_database($password)
     {
       //Field validation succeeded.&nbsp; Validate against database
       $username = $this->input->post('email');
    
       //query the database
       $result = $this->Users_m->login($username, $password);
    
       if($result)
       {
         $sess_array = array();
         
         foreach($result as $row)
         {
           $sess_array = array
           (
             'id' => $row->id,
             'email' => $row->email,
             'nome' => $row->nome,
             'cognome' => $row->cognome
           );
           $this->session->set_userdata('logged_in', $sess_array);
         }
         return TRUE;
       }
       else
       {
         $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert"><i class="glyphicon glyphicon-ban-circle" style="float:left;"></i>Invalid username or password</div>');
         return false;
       }
     }
     
     public function logout()
     {
        $this->session->sess_destroy();
        redirect(base_url());
     }
}
