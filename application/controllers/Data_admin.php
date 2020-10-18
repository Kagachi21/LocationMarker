<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index(){
        $data['user'] = $this->Admin_model->tampil()->result();
         $this->template->views('v_data_admin', $data);
    }
    
    public function edit($id){
        $where = array('id_login' => $id);
        $data['user'] = $this->Admin_model->edit_data($where, 'login JOIN level USING(id_level) JOIN user USING(id_user)')->result();
        $this->template->views('crud/edit_admin',$data);
    }
    public function hapus($id){
        $where = array('id_login' => $id,
        'id_user' => $id);
        $this->Admin_model->hapus_data($where,'login');
        $this->Admin_model->hapus_data($where,'user');
        redirect('Data_admin/index');
    }

    public function update(){
        $id_login = $this->input->post('id_login');
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_level = $this->input->post('id_level');

        $data = array(
            'username' => $username,
            'password' => $password,
            'id_level' => $id_level
        );
        $data1 = array(
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );

        $where = array(
            'id_login' => $id_login
        );
        $where1 = array(
            'id_user' => $id_user
        );

        $this->Admin_model->update_data($where,$data,'login');
        $this->Admin_model->update_data($where1,$data1,'user');
        redirect('Data_admin/index');
    }
    public function input1(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_level = $this->input->post('id_level');
        $id_user = $this->input->post('id_user');

        $data = array(
            'username' => $username,
            'password' => $password,
            'id_level' => $id_level,
            'id_user' => $id_user
        );

        $this->Admin_model->input_data($data, 'login');
        redirect('Data_admin/index');
    }
    public function input(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );

        $this->Admin_model->input_data($data, 'user');
        redirect('Data_admin/tambah1');
    }
    public function tambah(){
        $this->template->views('crud/tambah_admin');
    }
    public function tambah1(){
        $data['max_user']=$this->Admin_model->max_data();
        $this->template->views('crud/tambah_admin2',$data);
    }
}
?>