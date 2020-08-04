<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_page extends CI_Controller {

	public function index()
	{
		$this->load->view('User/home_page');
    }
}