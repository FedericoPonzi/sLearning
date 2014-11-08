<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_c extends CI_Controller
{
    function _construct()
    {
        parent::__construct();
        //Carico il model degli utenti (mi serve per il login)
        $this->load->model('Users_m'); 
    }
    public function index()
    {
        /*
        *  //Se non ho specificato un corso da amministrare, vuol dire che non sono passato per login_admin.php
        Per questo motivo, se non è presente il dato, lo rimando dentro a login_admin. Teoricamente dovrebbe esserci in login admin la
        possibilità di scegliere il corso da amministrare (nel caso si tratti di uno studente).
        */
        
        if(!isSet($this->session->userdata('logged_in')['ammin_corso']))
        {
            redirect(base_url('/admin/login_corso'));
        }
        
    }
}


?>