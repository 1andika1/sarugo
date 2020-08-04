<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {

	public function index($wisata = "wisata")
	{
        $wisata = isset($_GET["wisata"]) ? $_GET["wisata"] : $wisata;
        $this->load->view("User/$wisata");
    }
}