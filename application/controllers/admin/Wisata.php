<?php

class Wisata extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }

    public function index()
    {
        $this->load->view('admin/adm_wisata_rpage');
        $this->load->view('templates/footer');
    }
}