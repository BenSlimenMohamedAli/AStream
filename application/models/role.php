<?php


class role extends CI_Model
{
    public function get_roles(){
        $this->db->select("*");
        $this->db->from("roles");
        $query = $this->db->get();
        return $query->result();
    }
}