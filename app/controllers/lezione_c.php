<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Lezione_c extends CI_Controller
{

    function __construct() 
    {
        parent::__construct();
        //$this->load->model('home_m');
    }
	public function index()
	{	  
		// show view
		$data['pagetitle'] = "Base Di Dati";
		$data['metadescrizione'] = "Corso di base di dati";
		$this->load->library('template');

        $this->template->crea('main', 'lezione', $data, 'header', 'navigation', 'footer');
	}
	
}