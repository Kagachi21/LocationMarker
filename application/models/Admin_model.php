<?php
class Admin_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('login');
        $query = $this->db->get();
        return $query;
    }

    function lev(){
        $this->db->select('*');
        $this->db->from('level');
        $query = $this->db->get();
        return $query;
    }

    function tampil(){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('level', 'login.id_level=level.id_level');
        $this->db->join('user', 'login.id_user=user.id_user');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
        
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }


    function cek_login($table,$where){
       return $this->db->get_where($table,$where);
    }

    function max_data(){
        $query = $this->db->query("SELECT MAX(id_user) as max_id FROM user"); 
         $row = $query->row_array();
        $max_id = $row['max_id']; 

        // $this->db->select_max('tm_pegawai_id');
        // $query = $this->db->get('tm_pegawai');
        return $max_id;
    }

    //LOGIN
    function loginku($username, $password){
        $query=$this->db->query("SELECT id_login, username, password, id_level, id_user FROM login JOIN level USING(id_level) JOIN user USING(id_user) WHERE username='$username' AND password='$password'");
        return $query;
    }


    function isNotLogin(){
        return $this->session->userdata('username') === null;
    }
   
}
?>