<?php 
class Convensional extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ////////////////////////////////////////////////////////
        $data['conven'] = $this->tower_model->tampil_conven()->result();
         $this->template->views('v_convensional', $data);
    }

    public function edit($id){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        //////////////////////////////////////////////////////////
        $where = array('id_convensional' => $id);
        $data['conven'] = $this->tower_model->edit_data($where, 'convensional')->result();
        $this->template->views('crud/tower/edit_convensional',$data);
    }

    public function hapus($id){
        $where = array('id_convensional' => $id);
        $this->tower_model->hapus_data($where, 'convensional');
        redirect('Convensional/index');
    }

    public function update(){
        $id_convensional = $this->input->post('id_convensional');
        $tipe_conven = $this->input->post('tipe_conven');
        $jenis_coven = $this->input->post('jenis_coven');
        $jenis_coven2 = $this->input->post('jenis_coven2');
        $seri_coven = $this->input->post('seri_coven2');
        $seri_coven2 = $this->input->post('seri_coven2');
        $sn_c1 = $this->input->post('sn_c1');
        $sn_c2 = $this->input->post('sn_c2');

        $data = array(
            'tipe_conven' => $tipe_conven,
            'jenis_coven' => $jenis_coven,
            'jenis_coven2' => $jenis_coven2,
            'seri_coven' => $seri_coven,
            'seri_coven2' => $seri_coven2,
            'sn_c1' => $sn_c1,
            'sn_c2' => $sn_c2   
        );

        $where = array(
            'id_convensional' => $id_convensional
        );

        $this->tower_model->update_data($where,$data,'convensional');
        redirect('Convensional/index');
    }

    public function input(){
        $tipe_conven = $this->input->post('tipe_conven');
        $jenis_coven = $this->input->post('jenis_coven');
        $jenis_coven2 = $this->input->post('jenis_coven2');
        $seri_coven = $this->input->post('seri_coven2');
        $seri_coven2 = $this->input->post('seri_coven2');
        $sn_c1 = $this->input->post('sn_c1');
        $sn_c2 = $this->input->post('sn_c2');

        $data = array(
            'tipe_conven' => $tipe_conven,
            'jenis_coven' => $jenis_coven,
            'jenis_coven2' => $jenis_coven2,
            'seri_coven' => $seri_coven,
            'seri_coven2' => $seri_coven2,
            'sn_c1' => $sn_c1,
            'sn_c2' => $sn_c2
        );

        $this->tower_model->input_data($data, 'convensional');
        redirect('Convensional/index');
    }
}
?>