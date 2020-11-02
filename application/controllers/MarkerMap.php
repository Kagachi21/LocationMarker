<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MarkerMap extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('marker_model');
    }

    public function index(){
        $data['tanda']=$this->marker_model->getAll()->result_array();
         $this->template->views('v_marker',$data);
    }

    public function editMap() {
        echo "map diedit";
    }
}
?>