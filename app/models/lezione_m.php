<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lezione_m extends CI_Model
{
	/**
	 * crud
	 * create table lezione
        (
        	id serial not null primary key,
        	titolo varchar(100) not null,
        	descrizione varchar(1000),
        	data date not null default CURRENT_DATE,
        	corsoid int not null,
        	foreign key (corsoid) references corso(codice)
        );
	 */
	function create_lezione($titolo, $descrizione)
    {
        $data = array
        (
            'titolo' => $titolo,
            'corsoid' => 1234
        );
        $var= $this->db->insert('lezione', $data);

         if($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }

    }
    
	public function get_lezione($id=null, $idcorso)
	{
	    
	    if(!is_null($id))
		{
			$this->db->where('id', $id);
		}
		$this->db->where('corsoid', $idcorso);
		$this->db->order_by('data', 'desc');

		$query = $this->db->get('lezione');

		return $query->result();
		
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
}