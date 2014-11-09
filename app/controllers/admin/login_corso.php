<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_corso extends CI_Controller
{
    function _construct()
    {
        parent::__construct();
        //Carico il model degli utenti (mi serve per il login)
        $this->load->model('Users_m'); 
    }
    public function index()
    {
        echo "Funzioni di login!";
    }
}


?>