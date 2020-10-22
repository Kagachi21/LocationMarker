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
    
}
?>