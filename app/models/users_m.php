<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends CI_Model
{
    /**
     * Permette di loggare un utente e riconsocere se si tratta di uno studente o un professore.
     */
    function login($email, $password)
    {

        $this -> db -> from('utente');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', $password);
        
        $query = $this -> db -> get();
        
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
 
    public function register_user($nome, $cognome, $sex, $email, $password)
    {
        
        $data = array 
        (
            'nome' => $nome,
            'cognome' => $cognome,
            'sex' => $sex,
            'email' => $email,
            'password' => $password
        );

        $this -> db -> insert('utente', $data);
        return $this->db->insert_id();
    }
    
    public function register_student($nome, $cognome, $sex, $email, $password, $mailinglist)
    {
        $this->load->model('Permesso_M');
        $this->db->trans_start();
        
        $utenteid = $this->register_user($nome, $cognome, $sex, $email, $password);
        //$this->Permesso_M->set_default_permission(false, $this->db->insert_id());
        
        $mailinglist= isset($mailinglist) ? true : false;
        
        $data = array
        (
            'id' => $utenteid,
            'mailinglist' =>  $mailinglist ? "true" : "false"
        );
        $this->db->insert('studente', $data);
        $this->db->trans_complete();
        return $this->db->insert_id();
        
    }
    
    public function register_professore($nome, $sex, $email, $password, $biografia)
    {
        $this->load->model('Permesso_M');
        $utenteid = register_user($nome, $sex, $email, $password);
        $this->Permesso_M->set_default_permission(false, $this->db->insert_id());

        $data = array
        (
            'biografia' => $biografia
        );
        $this->db->insert('professore', $professore);
        return $this->db->insert_id();
    }
    
    public function get_last_N_users($n=10)
    {
        $this->db->limit($n);
        $query = $this->db->get('utente');
        return $query->result();
    }
    public function get_user($id)
    {
        $this->db->where('id', $id);
        //Sbagliato?!
        return $this->db->get('utente');
    }
    
    /**
     * Torna true se la email è presente nel database. False altrimenti.*/
    public function used_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('utente');
        return $query->num_rows() > 0?  true : false;
    }
    
    public function isRegisteredToCourse($corsoId)
    {

        $this->db->from('studia');
        $this->db->where('studenteid', $this->session->userdata('logged_in')['id']);
        $this->db->where('corsoid', $corsoId);
        $query = $this->db->get();
        if($query->num_rows() > 0 ) return true;
        
        $this->db->reconnect();
        $this->db->from('esercita');
        $this->db->where('professoreid', $this->session->userdata('logged_in')['id']);
        $this->db->where('corsoid', $corsoId);
        $query = $this->db->get();
        if($query->num_rows() > 0 ) return true;
        
        $this->db->reconnect();
        $this->db->from('corso');
        $this->db->where('professoreid', $this->session->userdata('logged_in')['id']);
        $this->db->where('codice', $corsoId);
        $query = $this->db->get();
        if($query->num_rows() > 0 ) return true;

        return false;
    }
    
    public function prova($corsoId)
    {
        $this->db->from('studia');
        $this->db->where('studenteid', $this->session->userdata('logged_in')['id']);
        $this->db->where('corsoid', $corsoId);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
