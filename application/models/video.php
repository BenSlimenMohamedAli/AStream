<?php

class video extends CI_Model
{
    public function insert_video($titre,$t_original,$origine,$realisateur,$duree,$d_sortie,$annee_prod,$note_presse,$description,$url,$type,$categorie,$genre,$disponible){
        $this->db->query('insert into `video` (`titre`,`titre_original`,`origine`,`realisateur`,`duree`,`date_sortie`,`annee_prod`,`note_presse`,`description`,`url`,`type`,`categorie`,`genre`,`disponible`) 
                          values ("'.$titre.'","'.$t_original.'","'.$origine.'","'.$realisateur.'","'.$duree.'","'.$d_sortie.'","'.$annee_prod.'","'.$note_presse.'","'.$description.'","'.$url.'","'.$type.'","'.$categorie.'","'.$genre.'",'.$disponible.')');
    }

    public function get_all(){
        $this->db->select("*");
        $this->db->from("video");

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function get_all_categories(){
        $this->db->select("count(*) as cnt,categorie");
        $this->db->from("video");
        $this->db->group_by("categorie");

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function get_categorie_videos($categorie){
        $this->db->select("*");
        $this->db->from("video");
        $this->db->where("categorie",$categorie);

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function get_video ($video){
        $this->db->select("*");
        $this->db->from("video");
        $this->db->where("titre",$video);

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

}