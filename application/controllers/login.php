<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();

        //$this->load->model('');
    }

    public function start_login()
    {
        $this->load->view('templates/login_view');
    }

}
?>