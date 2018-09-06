<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Select');
    }

    public function index(){

    }
    public function process(){
        $return =   $this->Select->checkuser_exits("users",$_POST);
        if(empty($return)){
            redirect('welcome/index/'."Someting Went Wrong",'refresh');
        }else{
            $session_userdata   =   array(
                'userid'=>$return[0]->id,
                'email'=>$return[0]->email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_userdata);
            redirect('Welcome/dashboard','refresh');

        }
    }

}
