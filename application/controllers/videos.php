<?php

class videos extends CI_Controller
{

    public function view($vid)
    {
        $page = 'show_video';
        if ( ! file_exists(APPPATH.'views/forms/public/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->model('video');
        $vid = str_replace('%20'," ",$vid);
        $vid = str_replace('%C3%A9',"é",$vid);

        $this->load->helper('html');
        $this->load->helper('url');

        $info = $this->video->get_video($vid);

        $data['info'] = $info;


        $this->load->view('templates/header');
        $this->load->view('forms/public/'.$page,$data);
        $this->load->view('templates/footer');
    }
}