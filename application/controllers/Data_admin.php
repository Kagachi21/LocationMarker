<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index(){
        $data['user'] = $this->Admin_model->getAll()->result();
         $this->template->views('v_data_admin', $data);
    }
    
    public function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->Admin_model->edit_data($where, 'login')->result();
        $this->template->views('crud/edit_admin',$data);
    }
    public function hapus($id){
        $where = array('id' => $id);
        $this->Admin_model->hapus_data($where,'login');
        redirect('Data_admin/index');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $where = array(
            'id' => $id
        );

        $this->Admin_model->update_data($where,$data,'login');
        redirect('Data_admin/index');
    }
    public function input(){
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $this->Admin_model->input_data($data, 'login');
        redirect('Data_admin/index');
    }
    public function tambah(){
        //menampilkan tambah_mahasiswa
        $this->template->views('crud/tambah_admin');
    }
}
?>