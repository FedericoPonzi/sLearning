<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_m extends CI_Model
{
	/**
	 * crud
	 */
	 
    function create_news( $titolo, $contenuto, $professoreid, $corsocod)
    {
        $data = array
        (
            'titolo' => $titolo,
            'contenuto' => $abstract,
            'autoreid' => $annoac,
            'corsocodice' =>$professoreid
        );
        $this->db->insert('corso', $data);
		return $this->db->insert_id();
    }
    
	function update_corso($codice, $titolo, $abstract, $annoac, $professoreid)
	{
		$this->db->where('codice', $codice);
		$data = array
        (
            'codice' => $codice,
            'titolo' => $titolo,
            'abstract' => $abstract,
            'annoac' => $annoac,
            'professoreid' =>$professoreid
        );
		$this->db->update('corso', $data);
	}
	
	public function delete_corso($codice)
	{	
	    $this->db->where('codice', $codice);
		$this->db->delete('corso');
		return $this->db->affected_rows();
	}
	
	public function get_corso($codice=null)
	{
		if(!is_null($codice))
		{
			$this->db->where('codice', $codice);
		}
		//$this->db->order_by('titolo', 'desc');
		$query = $this->db->get('corso');
		return $query->result();
	}
	

}