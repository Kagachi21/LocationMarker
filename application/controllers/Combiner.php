<?php 
class Combiner extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('tower_model');
    }
    
    public function index(){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        /////////////////////////////////////////////////////
        $data['combin'] = $this->tower_model->tampil_combin()->result();
         $this->template->views('v_combiner', $data);
    }

    public function edit($id){
        $this->db->join('login', 'login.id_user = user.id_user');
        $this->db->where('login.username', $this->session->userdata("username"));
        $data['user'] = $this->db->get('user')->row_array();
        ////////////////////////////////////////////////////////
        $where = array('id_combiner' => $id);
        $data['combin'] = $this->tower_model->edit_data($where, 'combiner')->result();
        $this->template->views('crud/tower/edit_combiner',$data);
    }

    public function hapus($id){
        $where = array('id_combiner' => $id);
        $this->tower_model->hapus_data($where, 'combiner');
        redirect('Combiner/index');
    }

    public function update(){
        $id_combiner = $this->input->post('id_combiner');
        $nama_combiner = $this->input->post('nama_combiner');
        $jumlah_cb = $this->input->post('jumlah_cb');
        $csn1 = $this->input->post('csn1');
        $csn2 = $this->input->post('csn2');
        $csn3 = $this->input->post('csn3');
        $csn4 = $this->input->post('csn4');
        $csn5 = $this->input->post('csn5');
        $csn6 = $this->input->post('csn6');
        $csn7 = $this->input->post('csn7');
        $csn8 = $this->input->post('csn8');
        $csn9 = $this->input->post('csn9');
        $csn10 = $this->input->post('csn10');
        $csn11 = $this->input->post('csn11');
        $csn12 = $this->input->post('csn12');

        $data = array(
            'nama_combiner' => $nama_combiner,
            'jumlah_cb' => $jumlah_cb,
            'csn1' => $csn1,
            'csn2' => $csn2,
            'csn3' => $csn3,
            'csn4' => $csn4,
            'csn5' => $csn5,
            'csn6' => $csn6,
            'csn7' => $csn7,
            'csn8' => $csn8,
            'csn9' => $csn9,
            'csn10' => $csn10,
            'csn11' => $csn11,
            'csn12' => $csn12
        );

        $where = array(
            'id_combiner' => $id_combiner
        );

        $this->tower_model->update_data($where,$data,'combiner');
        redirect('Combiner/index');
    }

    public function input(){
        $nama_combiner = $this->input->post('nama_combiner');
        $jumlah_cb = $this->input->post('jumlah_cb');
        $csn1 = $this->input->post('csn1');
        $csn2 = $this->input->post('csn2');
        $csn3 = $this->input->post('csn3');
        $csn4 = $this->input->post('csn4');
        $csn5 = $this->input->post('csn5');
        $csn6 = $this->input->post('csn6');
        $csn7 = $this->input->post('csn7');
        $csn8 = $this->input->post('csn8');
        $csn9 = $this->input->post('csn9');
        $csn10 = $this->input->post('csn10');
        $csn11 = $this->input->post('csn11');
        $csn12 = $this->input->post('csn12');

        $data = array(
            'nama_combiner' => $nama_combiner,
            'jumlah_cb' => $jumlah_cb,
            'csn1' => $csn1,
            'csn2' => $csn2,
            'csn3' => $csn3,
            'csn4' => $csn4,
            'csn5' => $csn5,
            'csn6' => $csn6,
            'csn7' => $csn7,
            'csn8' => $csn8,
            'csn9' => $csn9,
            'csn10' => $csn10,
            'csn11' => $csn11,
            'csn12' => $csn12
        );

        $this->tower_model->input_data($data, 'combiner');
        redirect('Combiner/index');
    }
}
?>