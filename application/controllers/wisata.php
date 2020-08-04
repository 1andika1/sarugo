<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {

	public function index($wisata = "wisata")
	{
        $wisata = isset($_GET["wisata"]) ? $_GET["wisata"] : $wisata;
        $data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$this->load->view('templates/usersTemplates/header',$data);
        $this->load->view("User/$wisata");
        $this->load->view('templates/usersTemplates/footer');
    }
}