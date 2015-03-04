<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/4
 * Time: 18:50
 */
class Pages extends CI_Controller{
    public function view($page = 'home')
    {
        if( !file_exists( APPPATH.'/views/pages/'.$page.'.php')){
            //404
            show_404();
        }
        $data['title'] = ucfirst( $page );

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}