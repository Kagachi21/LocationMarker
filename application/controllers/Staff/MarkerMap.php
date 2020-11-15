<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MarkerMap extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('marker_model');
    }

    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ////////////////////////////////////
        $data['tanda']=$this->marker_model->getAll()->result_array();
         $this->template->viewsku('v_marker',$data);
    }

    public function editMap() {
        echo "map diedit";
    }
}
?>