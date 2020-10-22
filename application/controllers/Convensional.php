<?php 
class Convensional extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $data['conven'] = $this->tower_model->tampil_conven()->result();
         $this->template->views('v_convensional', $data);
    }
}
?>