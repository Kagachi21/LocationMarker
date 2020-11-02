<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InfoLokasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $data['infoloc'] = $this->tower_model->tampil()->result();
         $this->template->views('v_info_lokasi', $data);
    }
    
    public function edit($id){
        $where = array('id_lokasi' => $id);
        $data['loc'] = $this->tower_model->edit_data($where, 'lokasi JOIN tower USING(id_tower) JOIN tipe_tower USING(id_tipe) JOIN combiner USING(id_combiner) JOIN convensional USING(id_convensional)')->result_array();
        $data['loca'] = $this->tower_model->tampil_tower()->result_array();
        $this->template->views('crud/tower/edit_lokasi',$data);
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
        $this->template->views('crud/tower/tambah_combiner');
    }
    public function tambah1(){
        $this->template->views('crud/tower/tambah_conven');
    }
    public function tambah2(){
        $this->template->views('crud/tower/tambah_tipe_tower');
    }
    public function tambah3(){
        $data['tipe'] = $this->tower_model->tampil_tower()->result_array();
        $data['combi'] = $this->tower_model->tampil_combin()->result_array();
        $data['conven'] = $this->tower_model->tampil_conven()->result_array();
        $this->template->views('crud/tower/tambah_tower', $data);
    }
    public function tambah4(){
        $data['loc'] = $this->tower_model->tampil()->result_array();
        $this->template->views('crud/tower/tambah_lokasi', $data);
    }
}
?>