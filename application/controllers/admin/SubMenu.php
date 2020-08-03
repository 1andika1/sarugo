<?php

class SubMenu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');

    }
    public function index()
    {
        
        $this->load->view('admin/adm_submenu_rpage');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/adm_submenu_cpage');
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $this->load->view('admin/adm_submenu_upage');
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        return "<h1>Delete Success";
    }
}