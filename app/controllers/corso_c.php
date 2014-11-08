<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Corso_c extends CI_Controller
{

    function __construct() 
    {
        parent::__construct();


    }
	public function index($corsoId=null)
	{	  
        if(isSet($corsoId))
        {
            redirect(base_url('index.php/corso_c/v') . $corsoId);
        }
        redirect(base_url('/index.php/lista_corsi'));
    } 
    
	
	public function v($corsoId=null)
	{
	    $this->load->library('template');
	    $this->load->model('Corso_m');
	    $this->load->model('Users_m');
        $this->load->model('Studente_m');
            
	    if($this->session->userdata('logged_in') && 
	        $this->Studente_m->is_studente_inscritto_a_corso($this->session->userdata('logged_in')['id'], $corsoId))
        {
            if($corsoId != null && $this->Users_m->isRegisteredToCourse($corsoId))
            {	
                echo "sono dentro";
		        $corso = $this->Corso_m->get_corso($corsoId);
		        foreach($corso as $row)
                {
                    $data['pagetitle']= $row->titolo;
                    $data['metadescrizione'] = $row->abstract;
                }
                $this->template->crea('main', 'corso', $data, 'header', 'navigation', 'footer');

            }
            else
            {
                redirect(base_url('/'));
            }

        }
	}
	
}