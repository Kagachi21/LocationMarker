<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index(){
      $this->load->view('admin/_template/head');  
      $this->load->view('admin/_template/js');  
      $this->load->view('login_admin');
    }

    public function cek_log(){
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');
        $cek = $this->Admin_model->login($username,$password,'login')->result();
        if($cek != FALSE){
            foreach ($cek as $row){
                $user = $row->username;
                $level = $row->level;
            }
            $this->session->set_userdata('session_admin',$user);
            $this->session->set_userdata('session_level',$level);
            redirect('dashboard');
        }else{
            $this->load->view('login_admin');
            // echo "username atau password salah";
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    
    public function register(){
        
    }
}
?>