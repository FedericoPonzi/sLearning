<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Test_c extends CI_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('Lezione_m');
    }
	public function index()
	{	  

		$this->load->view('test');

   
	}

}