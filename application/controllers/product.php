<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function index()
	{
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$this->load->view('templates/usersTemplates/header',$data);
		$this->load->view('User/product');
		$this->load->view('templates/usersTemplates/footer');
    }
}