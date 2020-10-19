<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('marker_model');
    }

    public function mapDetail(){
        $id_lokasi = $this->input->post('id_lokasi');
        $data['map'] = $this->db->get_where('lokasi', ['id_lokasi' => $id_lokasi])->row_array();
        $this->load->view('ajax/form_detail', $data);
    }    

    public function editMap(){
        $id_lokasi = $this->input->post('id_lokasi');
        $data['map'] = $this->db->get_where('lokasi', ['id_lokasi' => $id_lokasi])->row_array();
        $this->load->view('ajax/form_edit', $data);
    }    
}
?>