<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InfoLokasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////
        $data['infoloc'] = $this->tower_model->tampil()->result();
         $this->template->viewsku('v_info_lokasi', $data);
    }
    
    public function edit($id){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        /////////////////////////////////////////////////////////
        $where = array('id_lokasi' => $id);
        $data['loc'] = $this->tower_model->edit_data($where, 'lokasi JOIN tower USING(id_tower) JOIN tipe_tower USING(id_tipe) JOIN combiner USING(id_combiner) JOIN convensional USING(id_convensional)')->result_array();
        $data['loca'] = $this->tower_model->tampil_tower()->result_array();
        $this->template->viewsku('crud/tower/edit_lokasi',$data);
    }

    public function hapus($id){
        $where = array('id_lokasi' => $id);
        $this->tower_model->hapus_data($where, 'lokasi');
        redirect('InfoLokasi/index');
    }

    public function update(){
        $id_lokasi = $this->input->post('id_lokasi');
        $nama_lokasi = $this->input->post('nama_lokasi');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $id_tower = $this->input->post('id_tower');

        $data = array(
            'nama_lokasi' => $nama_lokasi,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'id_tower' => $id_tower
        );

        $where = array(
            'id_lokasi' => $id_lokasi
        );

        $this->tower_model->update_data($where,$data,'lokasi');
        redirect('InfoLokasi/index');
    }

    public function input(){
        $nama_lokasi = $this->input->post('nama_lokasi');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $id_tower = $this->input->post('id_tower');

        $data = array(
            'nama_lokasi' => $nama_lokasi,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'id_tower' => $id_tower
        );

        $this->tower_model->input_data($data, 'lokasi');
        redirect('InfoLokasi/index');
    }

    public function tambah(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $this->template->viewsku('crud/tower/tambah_combiner',$data);
    }
    public function tambah1(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $this->template->viewsku('crud/tower/tambah_conven',$data);
    }
    public function tambah2(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $this->template->viewsku('crud/tower/tambah_tipe_tower',$data);
    }
    public function tambah3(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $data['tipe'] = $this->tower_model->tampil_tower()->result_array();
        $data['combi'] = $this->tower_model->tampil_combin()->result_array();
        $data['conven'] = $this->tower_model->tampil_conven()->result_array();
        $this->template->viewsku('crud/tower/tambah_tower', $data);
    }
    public function tambah4(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $data['loc'] = $this->tower_model->tampil()->result_array();
        $this->template->viewsku('crud/tower/tambah_lokasi', $data);
    }
}
?>