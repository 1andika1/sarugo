<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/usersTemplates/header'); 
		$this->load->view('User/Testimoni');
		$this->load->view('templates/usersTemplates/footer');
    }
}