<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Profilo_c extends CI_Controller
{
    
    function __construct() 
    {
        parent::__construct();
        //$this->load->model('home_m');
    }
	public function index()
	{	  
		// show view
		$data['pagetitle'] = "Tuo profilo";
		$data['metadescrizione'] = "Pagina del tuo profilo.";
		$this->load->library('template');

        $this->template->crea('main', 'utente', $data, 'header', 'navigation', 'footer');
	}
	
}