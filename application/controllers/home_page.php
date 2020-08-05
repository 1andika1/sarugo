<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_page extends CI_Controller {

	public function index()
	{ 
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$data['dataHalStatis'] = $this->StaticPageModel->getAllStaticPage(); 
		$this->load->view('templates/usersTemplates/header',$data);
		$this->load->view('User/home_page');
		$this->load->view('templates/usersTemplates/footer');
    }
}