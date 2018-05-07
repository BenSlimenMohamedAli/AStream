<?php

class categorie extends CI_Model
{

    public function insert_categorie($categorie){
        $this->db->insert('categories', array('categorie'=>$categorie));
    }

    public function get_all(){
        $this->db->select("*");
        $this->db->from("categories");

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function delete_categorie($categorie){
        $this->db->where('categorie',$categorie);
        $this->db->delete('categories');
        return true;
    }

    public function modify_categorie($categorie,$new){
        $sql = "update `categories` set `categorie` = ? where `categorie` = ? ";
        $this->db->query($sql, array($new,$categorie));
    }
}