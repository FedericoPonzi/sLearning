<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Register extends CI_Controller
{
    private $errorMessage = 1;
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Users_m');
    }
	public function index()
	{	  
	    $this->form_validation->set_rules('nome', 'Nome', 'trim|required|xss_cleanm|min_length[4]');
        $this->form_validation->set_rules('cognome', 'Cognome', 'trim|required|xss_clean|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_database');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|matches[passwordagain]');
        
        $this->form_validation->set_rules('passwordagain', 'Password again', 'trim|required');
        $this->form_validation->set_rules('sesso','Sesso', 'trim|required|xss_clean');
       
        
        // show view
        if($this->form_validation->run())
        {
            $this->errorMessage = 0;
            $this->Users_m->register_student($this->input->post('nome'),$this->input->post('cognome'),$this->input->post('sesso'), $this->input->post('email'), $this->input->post('password'), $this->input->post('mailinglist'));
        }
        echo $this->errorMessage;
	}
	
	public function check_database($email)
    {
        $res = $this->Users_m->used_email($email);
        
        /* Se l'email è già usata */
        if($res)
        {
            $this->errorMessage = 2;
            return false;
            
        }
            return true;
    }
}