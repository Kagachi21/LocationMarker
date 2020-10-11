<?php
class marker_model extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('');
        $query = $this->db->get();
        return $query;
    }
}