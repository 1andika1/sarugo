<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/usersTemplates/header'); 
		$this->load->view('User/product');
		$this->load->view('templates/usersTemplates/footer');
    }
}