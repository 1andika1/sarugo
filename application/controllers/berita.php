<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {

	public function index($berita = "berita")
	{
        $berita = isset($_GET["berita"]) ? $_GET["berita"] : $berita;
        $this->load->view('templates/usersTemplates/header'); 
        $this->load->view("User/$berita");
		$this->load->view('templates/usersTemplates/footer');
    }
}