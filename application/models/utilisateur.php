<?php

class utilisateur extends CI_Model
{
    private $id;
    private $nom;
    private $prenom;
    private $mdp;
    private $role;

    public function insert_ut($nom,$prenom,$mdp,$role){
        $this->db->query('insert into `utilisateur` (`nom`,`prenom`,`mdp`,`role`) values ("'.$nom.'","'.$prenom.'","'.$mdp.'","'.$role.'")');
    }

    public function verify_existance($nom,$mdp){
        $space = ' ';
        $this->db->select("*");
        $this->db->from("utilisateur");
        $this->db->where('lower(concat(nom,prenom,id))',strtolower($nom));
        $this->db->where('mdp',$mdp);
        $query = $this->db->get();

        $res = $query->result();

        $size = sizeof($res);
        if($size > 0){
            return $res;
        }
        return false;

    }

    public function get_inserted($nom,$prenom,$mdp){
        $this->db->select("*");
        $this->db->from("utilisateur");
        $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $this->db->where('mdp',$mdp);
        $this->db->order_by('id','desc');
        $this->db->limit(1);

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function get_all(){
        $this->db->select("*");
        $this->db->from("utilisateur");

        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('utilisateur');
        return true;
    }

    public function modify_user($id,$nom,$prenom,$mdp,$role){
        $sql = "update `utilisateur` set `nom` = ? ,`prenom` = ?,`mdp` = ?,`role` = ? where `id` = ? ";
        $this->db->query($sql, array($nom,$prenom,$mdp,$role,$id));
    }
}