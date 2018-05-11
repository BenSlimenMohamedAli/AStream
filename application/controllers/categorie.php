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

        $categorie = str_replace('%20'," ",$categorie);
        $categorie = str_replace('%C3%A9',"é",$categorie);

        $this->load->helper('html');
        $this->load->helper('url');

        $this->load->model('video');
        $vids = $this->video->get_categorie_videos($categorie);

        $data['cat'] = $categorie;
        $data['vids'] = $vids;
        $this->load->view('templates/header');
        $this->load->view('forms/public/'.$page,$data);
        $this->load->view('templates/footer');
    }

}