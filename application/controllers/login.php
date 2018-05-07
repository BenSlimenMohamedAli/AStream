<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class login extends CI_Controller
{
    public function view()
    {
        $page = 'login';
        if ( ! file_exists(APPPATH.'views/'.$page.'/index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first
        $this->load->helper('html');
        $this->load->helper('url');

        $this->load->view('templates/header');
        $this->load->view('login/index',$data);
        $this->load->view('templates/footer');
        $this->load->view('login/js');
    }

    public function do_signup(){
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $mdp = $this->input->post('mdp');

        $this->load->model('utilisateur');
        $this->utilisateur->insert_ut($nom,$prenom,$mdp,'utilisateur');

        // return the utilisateur nana
        $res = $this->utilisateur->get_inserted($nom,$prenom,$mdp);
        foreach($res as $item){
            echo $item->nom.$item->prenom.$item->id;
        }
    }

    public function do_signin(){
        $nom_ut = $this->input->post('nom_ut');
        $mdp = $this->input->post('mdpS');

        $this->load->model('utilisateur');

        if($res = $this->utilisateur->verify_existance($nom_ut,$mdp)){
            $this->load->library('session');
            foreach ($res as $item){
                $this->session->set_userdata('user_name', $nom_ut);
                $this->session->set_userdata('user_nom', $item->nom);
                $this->session->set_userdata('user_prenom', $item->prenom);
                $this->session->set_userdata('user_role', $item->role);
                $this->session->set_userdata('logged_in', true);
            }
            echo 'true';
        }else {
            echo 'false';
        }
    }

    /* Logout function */

    public function do_logout(){
        $this->load->library('session');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_nom');
        $this->session->unset_userdata('user_prenom');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_role');
        $this->session->set_userdata('logged_in', false);
        echo hello;
    }
}