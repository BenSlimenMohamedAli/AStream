<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    public function view()
    {
        $page = 'home';
        if ( ! file_exists(APPPATH.'views/'.$page.'/index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        //Session data
        // initialize utilisateur data for a new navigator
        $this->load->library('session');
        if(!$this->session->userdata('logged_in')) {
            $this->session->set_userdata('user_name', '');
            $this->session->set_userdata('user_nom', '');
            $this->session->set_userdata('user_prenom', '');
            $this->session->set_userdata('user_role', '');
            $this->session->set_userdata('logged_in', false);
        }

        $data['userdata'] = $this->session->all_userdata();
        $this->load->model('categorie');

        $categories = $this->categorie->get_all();
        $data['categories'] = $categories;

        $this->load->helper('html');
        $this->load->helper('url');

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('home/js');
    }
}