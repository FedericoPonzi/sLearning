<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        private $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }
    /**
     * Monta la pagina spezzata in più parti.
     * Input: la pagina di base, Data, e i nomi delle parti da prendere.
     * Output: la pagina completa.
     */
     
    function crea($tpl_base, $tpl_dir, $data=null)
    {
        $views_arr = array_slice(func_get_args(), 3);
        foreach( $views_arr as $view)
        {
            if ( file_exists( APPPATH.'views/'.$tpl_dir.'/'.$view ) ) //Senza .php
            {
                $view_path = $tpl_dir.'/'.$view;
            }
            
            else if ( file_exists( APPPATH.'views/'.$tpl_dir.'/'.$view.'.php' ) )  //Con .php
            {
                $view_path = $tpl_dir.'/'.$view.'.php';
            }
            
            else if ( file_exists( APPPATH.'views/'.$view ) ) //Cerca nella directory views/
            {
                $view_path = $view;
            }
            
            else if ( file_exists( APPPATH.'views/'.$view.'.php' ) ) // Cerca nella directory views/ con .php
            {
                $view_path = $view.'.php';
            }
            
            else // Errore
            {
                show_error('Unable to load the requested file: ' . $view.'.php');
            }
            // Se arrivo qui, allora ho trovato il file.
            
            $body = $this->ci->load->view($view_path, $data, TRUE);
             
            if ( is_null($data) ) 
            {
                $data = array( $view => $body);
            }
            else if ( is_array($data) )
            {
                $data[$view] = $body;
            }
            else if ( is_object($data) )
            {
                $data->$view = $body;
            }
        }
        
        $this->ci->load->view($tpl_dir .'/'.$tpl_base, $data);
    }
}