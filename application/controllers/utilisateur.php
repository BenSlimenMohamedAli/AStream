<?php
/**
 * Created by PhpStorm.
 * User: astro-coder
 * Date: 5/3/2018
 * Time: 7:09 PM
 */

class utilisateur extends CI_Controller
{
    /*
    *  Videos
    */
    /**
     *
     */
    public function upload_video(){

        if(isset($_FILES['file']))
        {
            $dossier = APPPATH.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vid'.DIRECTORY_SEPARATOR;
            $fichier = basename($_FILES['file']['name']);
            if ( 0 < $_FILES['file']['error'] ) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            }else if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                echo 'Upload effectué avec succès !';
            }
            else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }
        }else {

            echo 'error';
        }
    }

    public function add_video_server(){
        $titre = $this->input->post('titre');
        $t_original = $this->input->post('titre_original');
        $origine = $this->input->post('origine');
        $realisateur = $this->input->post('realisateur');
        $duree = $this->input->post('duree');
        $d_sortie = $this->input->post('date_sortie');
        $annee_prod = $this->input->post('annee_prod');
        $note_presse = $this->input->post('note_presse');
        $description = $this->input->post('description');
        $type = $this->input->post('type');
        $categorie = $this->input->post('vid_categorie');
        $genre = $this->input->post('vid_genre');
        $disponible = 0;

        $url = APPPATH.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vid'.DIRECTORY_SEPARATOR.$this->input->post('url');
        //$file_name = $this->input->post('file_name');

        $this->load->model('video');
        $this->video->insert_video($titre,$t_original,$origine,$realisateur,$duree,$d_sortie,$annee_prod,$note_presse,$description,$url,$type,$categorie,$genre,$disponible);
    }

}