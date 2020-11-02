<?php
class marker_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('lokasi');
        $this->db->join('tower','tower.id_tower = lokasi.id_tower');
        $this->db->join('tipe_tower','tipe_tower.id_tipe = tower.id_tipe');
        $this->db->join('combiner','combiner.id_combiner = tower.id_combiner');
        $this->db->join('convensional','convensional.id_convensional = tower.id_convensional');
        $query = $this->db->get();
        return $query;
    }

    function tampil_tower(){
        $this->db->select('*');
        $this->db->from('tower');
        $this->db->join('tipe_tower','tower.id_tipe = tipe_tower.id_tipe');
        $query = $this->db->get();
        return $query;
    }
}