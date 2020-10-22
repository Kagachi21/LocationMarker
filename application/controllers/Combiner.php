<?php 
class Combiner extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $data['combin'] = $this->tower_model->tampil_combin()->result();
         $this->template->views('v_combiner', $data);
    }
}
?>