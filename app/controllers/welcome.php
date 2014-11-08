<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $this->load->model('Users_m');
	    $data['ultimiutenti'] = $this->Users_m->get_last_N_users();
		$this->load->view('welcome_message', $data);
	}
	
	
	public function contattaci()
	{
	    $this->load->helper('email');
	    $this->form_validation->set_rules('nome', 'Nome', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('messaggio', 'messaggio', 'trim|required|min_lenght[10]');
        
        $messaggio = "Ciao, ti ha contattato ". $this->input->post('nome') ." (". $this->input->post('email') .") e ti ha inviato il seguente messaggio:<br> ". $this->input->post('messaggio') ." -------";
        if($this->form_validation->run())
        {
            send_email('isaacisback92@gmail.com', 'sLearning: Nuovo contatto', $messaggio);
            echo 0;
        }
        else
        {
            echo 1;
            echo validation_error();
        }
        
    }
	
}