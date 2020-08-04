<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function index($paket = "PakWisata")
	{
		$paket = isset($_GET["paket"]) ? $_GET["paket"] : $paket;
		$this->load->view('templates/usersTemplates/header'); 
		$this->load->view("User/$paket");
		$this->load->view('templates/usersTemplates/footer');
	}
}