<?php

class categorie extends CI_Controller
{
    public function view($categorie)
    {
        $page = 'video_list';
        if ( ! file_exists(APPPATH.'views/forms/public/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->helper('html');
        $this->load->helper('url');
        $data['cat'] = $categorie;
        $this->load->view('templates/header');
        $this->load->view('forms/public/'.$page,$data);
        $this->load->view('templates/footer');
    }

}