<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studente_m extends CI_Model
{
    
    public function is_studente_inscritto_a_corso($studenteId, $corsoCodice)
    {
        $this->db->where('studenteid', $studenteId);
        $this->db->where('corsoid', $corsoCodice);
        $this->db->limit(1);
        $query = $this->db->get('studia');
        if($query->num_rows() > 0)
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    
}