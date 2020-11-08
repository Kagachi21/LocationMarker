<?php 
class TipeTower extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $data['towerku'] = $this->tower_model->tampil_tower()->result();
         $this->template->viewsku('v_tower', $data);
    }

    public function edit($id){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ///////////////////////////////////////////////////////
        $where = array('id_tower' => $id);
        $data['tower'] = $this->tower_model->edit_data($where, 'tower JOIN tipe_tower USING(id_tipe)')->result();
        $this->template->viewsku('crud/tower/edit_tower',$data);
    }

    public function hapus($id){
        $where = array('id_tower' => $id);
        $this->tower_model->hapus_data($where,'tower');
        redirect('TipeTower/index');
    }

    public function update(){
        $id_tower = $this->input->post('id_tower');
        $id_tipe = $this->input->post('id_tipe');
        $nama_site = $this->input->post('nama_site');
        $nama_tower = $this->input->post('nama_tower');
        $tinggi_tow = $this->input->post('tinggi_tow');
        $type_tow = $this->input->post('type_tow');
        $jumlah_ch = $this->input->post('jumlah_ch');
        $sn1 = $this->input->post('sn1');
        $sn2 = $this->input->post('sn2');
        $sn3 = $this->input->post('sn3');
        $sn4 = $this->input->post('sn4');
        $sn5 = $this->input->post('sn5');
        $sn6 = $this->input->post('sn6');
        $sn7 = $this->input->post('sn7');
        $sn8 = $this->input->post('sn8');
        $sn9 = $this->input->post('sn9');
        $sn10 = $this->input->post('sn10');
        $sn11 = $this->input->post('sn11');
        $sn12 = $this->input->post('sn12');

        $data = array(
            'nama_site' => $nama_site
        );
        $data1 = array(
            'nama_tower' => $nama_tower,
            'tinggi_tow' => $tinggi_tow,
            'type_tow' => $type_tow,
            'jumlah_ch' => $jumlah_ch,
            'sn1' => $sn1,
            'sn2' => $sn2,
            'sn3' => $sn3,
            'sn4' => $sn4,
            'sn5' => $sn5,
            'sn6' => $sn6,
            'sn7' => $sn7,
            'sn8' => $sn8,
            'sn9' => $sn9,
            'sn10' => $sn10,
            'sn11' => $sn11,
            'sn12' => $sn12
        );

        $where = array(
            'id_tower' => $id_tower
        );
        $where1 = array(
            'id_tipe' => $id_tipe
        );

        $this->tower_model->update_data($where,$data,'tower');
        $this->tower_model->update_data($where1,$data1,'tipe_tower');
        redirect('TipeTower/index');
    }

    public function input(){
        $nama_tower = $this->input->post('nama_tower');
        $tinggi_tow = $this->input->post('tinggi_tow');
        $type_tow = $this->input->post('type_tow');
        $jumlah_ch = $this->input->post('jumlah_ch');
        $sn1 = $this->input->post('sn1');
        $sn2 = $this->input->post('sn2');
        $sn3 = $this->input->post('sn3');
        $sn4 = $this->input->post('sn4');
        $sn5 = $this->input->post('sn5');
        $sn6 = $this->input->post('sn6');
        $sn7 = $this->input->post('sn7');
        $sn8 = $this->input->post('sn8');
        $sn9 = $this->input->post('sn9');
        $sn10 = $this->input->post('sn10');
        $sn11 = $this->input->post('sn11');
        $sn12 = $this->input->post('sn12');

        $data = array(
            'nama_tower' => $nama_tower,
            'tinggi_tow' => $tinggi_tow,
            'type_tow' => $type_tow,
            'jumlah_ch' => $jumlah_ch,
            'sn1' => $sn1,
            'sn2' => $sn2,
            'sn3' => $sn3,
            'sn4' => $sn4,
            'sn5' => $sn5,
            'sn6' => $sn6,
            'sn7' => $sn7,
            'sn8' => $sn8,
            'sn9' => $sn9,
            'sn10' => $sn10,
            'sn11' => $sn11,
            'sn12' => $sn12
        );

        $this->tower_model->input_data($data, 'tipe_tower');
        redirect('TipeTower/index');
    }

    public function input1(){
        $nama_site = $this->input->post('nama_site');
        $id_tipe = $this->input->post('id_tipe');
        $id_combiner = $this->input->post('id_combiner');
        $id_convensional = $this->input->post('id_convensional');

        $data = array(
            'nama_site' => $nama_site,
            'id_tipe' => $id_tipe,
            'id_combiner' => $id_combiner,
            'id_convensional' => $id_convensional
        );

        $this->tower_model->input_data($data, 'tower');
        redirect('TipeTower/index');
    }
}
?>