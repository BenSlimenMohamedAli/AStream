<?php
class genre extends CI_Model
{

    public function insert_genre($genre){
        $this->db->insert('genres', array('genre'=>$genre));
    }

    public function get_all(){
        $this->db->select("*");
        $this->db->from("genres");

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function delete_genre($genre){
        $this->db->where('genre',$genre);
        $this->db->delete('genres');
        return true;
    }

    public function modify_genre($genre,$new){
        $sql = "update `genres` set `genre` = ? where `genre` = ? ";
        $this->db->query($sql, array($new,$genre));
    }
}