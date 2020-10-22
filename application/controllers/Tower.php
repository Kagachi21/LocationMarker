<?php 
class Tower extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $data['towerku'] = $this->tower_model->tampil_tower()->result();
         $this->template->views('v_tower', $data);
    }
}
?>