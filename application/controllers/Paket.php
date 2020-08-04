<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function index($paket = "PakWisata")
	{
		$paket = isset($_GET["paket"]) ? $_GET["paket"] : $paket;
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$this->load->view('templates/usersTemplates/header',$data);
		$this->load->view("User/$paket");
		$this->load->view('templates/usersTemplates/footer');
	}
}