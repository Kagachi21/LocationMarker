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

    public function cek_login(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
  
		$cek_login=$this->Admin_model->loginku($username,$password);
  
		if($cek_login->num_rows() > 0){ //jika login sebagai mahasiswa
					  $data=$cek_login->row_array();
			  $this->session->set_userdata('masuk',TRUE);
					  if($data['id_level']=='1'){
					$this->session->set_userdata('id',$data['id_login']);
					$this->session->set_userdata('username',$data['username']);
					redirect('dashboard');
  
					  }elseif($data['id_level']=='2'){
					$this->session->set_userdata('id',$data['id_login']);
						  $this->session->set_userdata('username',$data['username']);
					redirect('Staff/dashboard');
					  }
  
			  }else{  // jika username dan password tidak ditemukan atau salah
					  $url=base_url('login');
					echo $this->session->set_flashdata('msg','Username Atau Password Salah');
					  redirect($url);
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