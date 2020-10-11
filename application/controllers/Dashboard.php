<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        if($this->Admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){
        // if($this->session->userdata('status') != "login"){
        //     redirect(base_url('admin/login_admin'));
        // // }
        // $data['kendaraan'] = $this->dashboard_model->jum_kendaraan();
        // $data['lokasi'] = $this->dashboard_model->jum_request();
        // $data['riwayat'] = $this->dashboard_model->jum_update();
        // $data['pengguna'] = $this->dashboard_model->jum_pengguna();
        // $data['user'] = $this->dashboard_model->getAll()->result();
         $this->template->views('v_dashboard');
    }    
}
?>