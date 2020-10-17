<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_data extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('form_data_model');
    }
    
    public function index(){
         $this->template->views('');
    }    
}
?>