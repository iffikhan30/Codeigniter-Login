<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($error=null)
	{
        $data['error']  =   $error;
        $data['session_logged_in'] =   $this->session->userdata('logged_in');
		$this->load->view('welcome_message',$data);

	}
    public function dashboard(){
        print_r($this->session->userdata('userid'));
        $this->load->view('welcome_dashboard');
    }

    public function logout(){
        $unset_session_userdata   =   array('userid','email','logged_in');
        $this->session->unset_userdata($unset_session_userdata);
        redirect('Welcome/index','refresh');
    }
}
