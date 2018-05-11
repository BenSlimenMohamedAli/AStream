<?php

class panel extends CI_Controller
{
    public function view()
    {

        $s = $this->session->userdata('logged_in');
        if($s === true){
            if(strcmp($this->session->userdata('user_role'),'admin') == 0){
                $page = 'panel/admin';
                if ( ! file_exists(APPPATH.'views/'.$page.'/index.php'))
                {
                    // Whoops, we don't have a page for that!
                    show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first
                $this->load->helper('html');
                $this->load->helper('url');

                // get all users
                $this->load->model('utilisateur');
                $res = $this->utilisateur->get_all(0);
                $data['res'] = $res;

                $nbr = $this->utilisateur->count();

                foreach ($nbr as $item){
                    $data['utilisateurs'] = $item->utilisateurs / 4;
                }
                // get all categories
                $this->load->model('categorie');
                $categories = $this->categorie->get_all();
                $data['categories'] = $categories;

                // get all genres
                $this->load->model('genre');
                $genres = $this->genre->get_all();
                $data['genres'] = $genres;

                $this->load->view('templates/header');
                $this->load->view('panel/admin/index', $data);
                $this->load->view('templates/footer');
                $this->load->view('panel/admin/js');
            }else {
                $page = 'panel/utilisateur';
                if ( ! file_exists(APPPATH.'views/'.$page.'/index.php'))
                {
                    // Whoops, we don't have a page for that!
                    show_404();
                }

                // get all categories
                $this->load->model('categorie');
                $categories = $this->categorie->get_all();
                $data['categories'] = $categories;

                // get all genres
                $this->load->model('genre');
                $genres = $this->genre->get_all();
                $data['genres'] = $genres;

                // helpers
                $this->load->helper('html');
                $this->load->helper('url');

                $this->load->view('templates/header');
                $this->load->view('panel/utilisateur/index',$data);
                $this->load->view('templates/footer');
                $this->load->view('panel/utilisateur/js');
            }
        }else {
            show_404();
        }
    }
}