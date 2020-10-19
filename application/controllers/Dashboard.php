<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        if($this->Admin_model->isNotLogin()) redirect('login');
    }
    
    public function index(){

         $this->template->views('v_dashboard');
    }    
}
?>