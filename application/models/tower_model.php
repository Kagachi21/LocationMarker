<?php
class tower_model extends CI_Model{

    function tampil(){
        $query=$this->db->query('SELECT * FROM lokasi JOIN tower USING(id_tower) JOIN tipe_tower USING(id_tipe) JOIN combiner USING(id_combiner) JOIN convensional USING(id_convensional)');
        return $query;
    }

    function tampil_tower(){
        $this->db->select('*');
        $this->db->from('tower');
        $this->db->join('tipe_tower','tower.id_tipe = tipe_tower.id_tipe');
        $query = $this->db->get();
        return $query;
    }

    function tampil_combin(){
        $this->db->select('*');
        $this->db->from('combiner');
        $query = $this->db->get();
        return $query;
    }

    function tampil_conven(){
        $this->db->select('*');
        $this->db->from('convensional');
        $query = $this->db->get();
        return $query;
    }
}
?>