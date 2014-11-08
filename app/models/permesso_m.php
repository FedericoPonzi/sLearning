<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permesso_M extends CI_Model
{
    /**
     * Ritorna true se l'utente ha il permesso
     */
    public function has_permission ($utenteid, $codice)
    {
        $this->db->where('utenteid', $utenteid);
        $this->db->where('permessoCodice', $codice);
        $this->db->from('permessiutente');
        if($this->db->count_all_results())
        {
            return true;
        }
        return false;
    }
    /**
     * Aggiunge il permesso all' utente specificati.
     */
    public function add_permission($utenteid, $permessocodice)
    {
        $data = array(
            'utenteid' => $utenteid,
            'permessocodice' => $permessocodice
            );
        $this->db->insert();
    }
    
    /**
     * Al momento della registrazione, setta i permessi minimi all' utente a seconda se si tratti di un professore o uno studente.
     */
    public function set_default_permission($isaprofessore, $utenteid)
    {
        
        $data = array
        (
            array
            ( 
                'permessocodice' => '1', // Postare argomenti nel forum
                'utenteid' => $utenteid
            ),
            array
            (
                'permessocodice' => '2', // Scaricare il materiale dei corsi a cui è registrato
                'utenteid' => $utenteid
            ),
        );
        
       if($isaprofessore)
       {
           array_push 
           (
               $data, 
               array
                (
                    'permessocodice' => '5', // Creare corsi
                    'utenteid' => $utenteid
                ),
                 array
                (
                    'permessocodice' => '6', // Modificare e cancellare discussioni del forum
                    'utenteid' => $utenteid
                ),
                array
                (
                    'permessocodice' => '7', // Creare categorie del forum
                    'utenteid' => $utenteid
                )
            );
       }
       $this->db->insert_batch('permessiutente', $data); 
    }
    
}