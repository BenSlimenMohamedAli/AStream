<?php

class admin extends CI_Controller
{
    public function load_users($page) {
        // get all users
        $this->load->model('utilisateur');
        $data['res'] = $this->utilisateur->get_all($page);

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

    public function count_users(){
        $this->load->model('utilisateur');
        $nbr = $this->utilisateur->count();
        foreach ($nbr as $item){
            $data['utilisateurs'] = $item ->utilisateurs / 4;
        }
        try{
            $this->load->view('forms/admin/paginations/user',$data);
        }catch (Exception $e){
            echo $e->getMessage();
        }

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
                $n = preg_replace('/[^A-Za-z0-9\-]/', '', $fichier);
                $n = str_replace(' ', '-', $n);

                rename($dossier.$fichier, $dossier.$n);

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
        $description = $this->input->post('description'); // la description
        $type = $this->input->post('type'); // le type d'url
        $categorie = $this->input->post('vid_categorie'); // la catégorie
        $genre = $this->input->post('vid_genre'); // le genre
        $disponible = 1; // Le video est validé par l'admin ou nn
        $url = $this->input->post('url'); // URL du video

        if(strcmp($type,'server') == 0){
            $url = preg_replace('/[^A-Za-z0-9\-]/', '', $url);
            $url = str_replace(' ', '-', $url);
            $url = 'http://localhost/AStream/vid/'.$url;
        }
        // Vérification de l'url
        else if(strcmp($type,'url') == 0){
            if(strstr($url,'www.youtube.com')){
                // Convertir le lien
                $url = preg_replace(
                    "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                    "//www.youtube.com/embed/$2",
                    $url
                );
            }
        }

        $this->load->model('video');
        $this->video->insert_video($titre,$t_original,$origine,$realisateur,$duree,$d_sortie,$annee_prod,$note_presse,$description,$url,$type,$categorie,$genre,$disponible);
    }
}