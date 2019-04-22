<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCo extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('User');
		//load library form validation
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }
    
    public function index()
	{
        //$this->load->view('Login');
        $page=$this->input->get("page");
		if(!isset($page)){
			$page='EditProfile';
		}
		$this->load->view('header2');
		$this->load->view($page);
		
    }
    
	public function Register()
	{
        if($this->User->Register()) {
            $this->session->set_flashdata('SuccessReg','Success');
    		$page=$this->input->get("page");
		    if(!isset($page)){
			    $page='Home';
		    }
		    $this->load->view('header2');
		    $this->load->view($page);
            //redirect('Landing/index');
        } else {
            $this->session->set_flashdata('FailReg', 'Fail');
            redirect('Landing/Register');
        }
    }

    public function Signin() {
        $user = $this->User->findUser();
        if($user != null){
            if($this->input->post('remember_me') != null) {
                set_cookie('logged', $user[0]['username'], '3600');
                $page=$this->input->get("page");
		        if(!isset($page)){
			        $page='Home';
		        }
		        $this->load->view('header2');
		        $this->load->view($page);
            } else {
                $this->session->set_userdata('successLogin', $user[0]['username']);
                $page=$this->input->get("page");
		        if(!isset($page)){
			        $page='Home';
		        }
		        $this->load->view('header2');
		        $this->load->view($page);
                //redirect('Landing');
            }
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            $this->load->view('Login');
            //redirect('Landing/Register');
        }
        /*$username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $where = array(
		    'username' => $username,
		    'password' => md5($password)
		);
	    $cek = $this->m_login->cek_login("admin",$where)->num_rows();
	    if($cek > 0){
		    $data_session = array(
			    'nama' => $username,
			    'status' => "login"
			);
		    $this->session->set_userdata($data_session);
		    redirect(base_url("admin"));
	    }else{
		    //echo "Username dan password salah !";
	    }*/

    }

    public function Profile(){
        $page=$this->input->get("page");
		if(!isset($page)){
			$page='profile';
		}
		$this->load->view('header2');
		$this->load->view($page);
    }

    public function Logout() {
       
        /* Complete this function using $cookie.
            Condition 1  : if isset($cookie) then delete_cookie('logged')
            Condition 2  : else then session_destroy() 
                After u set all condition, redirect to Landing controller.
            */

        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Landing');
        } else {
            session_destroy();
            redirect('Landing');
        }
    }
}