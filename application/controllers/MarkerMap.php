<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MarkerMap extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('marker_model');
    }

    public function index(){
         $this->template->views('v_marker');
    }    
}
?>