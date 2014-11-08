<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Lista_Corsi extends CI_Controller
{

     function __construct()
     {
       parent::__construct();
       $this->load->model('Corso_m','',TRUE);
     }
     	public function index()
	    {	  
    	    if(!$this->session->userdata('logged_in'))
            {
                redirect('welcome');
            }
    		// show view
    		$data['pagetitle'] = "Lista dei corsi | ". SITENAME;
    		$data['metadescrizione'] = "Lista dei corsi presenti in". SITENAME;
    		$data['lista_corsi'] = $this->Corso_m->get_corso();
    		$this->load->library('template');
    
            $this->template->crea('main', 'listacorsi', $data, 'header', 'navigation', 'footer');
	    }
}