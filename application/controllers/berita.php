<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {

	public function index($berita = "berita")
	{
        $berita = isset($_GET["berita"]) ? $_GET["berita"] : $berita;
        $data['menu'] = $this->MenuModel->getAllMenu();
        $data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
        $this->load->view('templates/usersTemplates/header',$data);
        $this->load->view("User/$berita");
		    $this->load->view('templates/usersTemplates/footer');
    }
}