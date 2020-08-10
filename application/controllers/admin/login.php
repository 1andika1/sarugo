<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent ::__construct(); 
    }

    public function index()
    {
        // cek user
        if(isset($this->session->admin)){
            redirect(base_url("admin/home"));
        }else if(isset($this->session->spradmin)){
            redirect(base_url("spradm_sarugo/home_page"));
        }
        // akhir check user

        $this->load->view('templates/login_view');
    }

    public function signin()
    {
        // var_dump($_POST);die();
        $username = htmlspecialchars( $_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        $dataUser = $this->db->get_where("akun",["username_admin"=>$username ])->result()[0];
        // var_dump($dataUser);die();
        if($password == $dataUser->password_admin){
            if($dataUser->level <=1){
                $this->session->admin = $dataUser;
                redirect(base_url("admin/home"));
            }else{
                $this->session->spradmin = $dataUser;
                redirect(base_url("spradm_sarugo/home_page"));
            }
        }else{
            redirect(base_url("admin"));
        }
    }

    public function logout()
    {       
        unset($_SESSION["spradmin"]);
        unset($_SESSION["admin"]);

        // var_dump($this->session->userdata);die();
        redirect(base_url("admin"));
    }

}
?>