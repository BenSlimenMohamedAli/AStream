<?php

class admin extends CI_Controller
{
    public function load_users() {
        // get all users
        $this->load->model('utilisateur');
        $res = $this->utilisateur->get_all();
        $data['res'] = $res;

        $this->load->view('forms/admin/user_info',$data);
    }
    // deleting utilisateur
    public function delete_user(){
        $this->load->model('utilisateur');
        $id = $this->input->post('id');
        if($this->utilisateur->delete_user($id)){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    // modify utilisateur
    public function modify_user(){
        $this->load->model('utilisateur');
        // post variables
        $nom = $this->input->post('u_nom');
        $prenom = $this->input->post('u_prenom');
        $mdp = $this->input->post('u_mdp');
        $role = $this->input->post('u_role');
        $id = $this->input->post('u_id');

        $this->utilisateur->modify_user($id,$nom,$prenom,$mdp,$role);
    }

    /*
     * categories
     *
     */

    // Loading a categorie
    public function load_categories() {
        // get all users
        $this->load->model('categorie');
        $res = $this->categorie->get_all();
        $data['res'] = $res;

        $this->load->view('forms/admin/categorie_info',$data);
    }

    // deleting a categorie
    public function delete_categorie(){
        $this->load->model('categorie');
        $cat = $this->input->post('categorie');
        echo $cat;
        $this->categorie->delete_categorie($cat);
    }
    // adding a categorie
    public function add_categorie(){
        $cat = $this->input->post('categorie');

        $this->load->model('categorie');
        $this->categorie->insert_categorie($cat);
    }

    public function modify_categorie(){
        $new = $this->input->post('new');
        $old = $this->input->post('old');

        $this->load->model('categorie');
        $this->categorie->modify_categorie($old,$new);
    }

    /*
 * genres
 *
 */

    // Loading a genre
    public function load_genres() {
        // get all users
        $this->load->model('genre');
        $res = $this->genre->get_all();
        $data['res'] = $res;

        $this->load->view('forms/admin/genre_info',$data);
    }

    // deleting a categorie
    public function delete_genre(){
        $this->load->model('genre');
        $cat = $this->input->post('genre');
        echo $cat;
        $this->genre->delete_genre($cat);
    }
    // adding a categorie
    public function add_genre(){
        $cat = $this->input->post('genre');

        $this->load->model('genre');
        $this->genre->insert_genre($cat);
    }

    public function modify_genre(){
        $new = $this->input->post('new');
        $old = $this->input->post('old');

        $this->load->model('genre');
        $this->genre->modify_genre($old,$new);
    }

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

            echo 'erreur';
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
        $disponible = 1;

        $url = 'http://localhost/AStream/vid/'.$this->input->post('url');
        //$file_name = $this->input->post('file_name');

        $this->load->model('video');
        $this->video->insert_video($titre,$t_original,$origine,$realisateur,$duree,$d_sortie,$annee_prod,$note_presse,$description,$url,$type,$categorie,$genre,$disponible);
    }
}