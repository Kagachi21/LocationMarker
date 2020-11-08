<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MarkerMap extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('marker_model');
        $this->load->model('tower_model');
    }

    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ////////////////////////////////////
        $data['tanda']=$this->marker_model->getAll()->result_array();
         $this->template->views('v_marker',$data);
    }

    public function editMap() {
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
        redirect('MarkerMap/index');
    }
}
?>