<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar_adm');
    }

    public function index()
    {
        $this->load->view('admin/adm_home_page');
        $this->load->view('templates/footer');
    }
}