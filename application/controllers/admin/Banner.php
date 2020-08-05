<?php 

class Banner extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }

    public function index()
    {
        $this->load->view('admin/adm_banner_rpage');
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $this->load->view('admin/adm_banner_upage');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/adm_banner_cpage');
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        // $this->BannerModel->delete($_GET["id"]);
        redirect("admin/banner");
    }


    // methode to add new data of static page
    public function add()
    {
        // var_dump($_POST,$_FILES);die();
        // var_dump( $_FILES);die();
        // get data from post method
        $judul          = $_POST["judul"]; 
        $foto         = $this->upload();
        $tgl_posting   = date("Y:m:d h:i");

        if(!$foto){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul" =>$judul,
            "foto"  =>$foto,
            "tgl_posting" => $tgl_posting
        );
            $this->BannerModel->add($data);
            redirect(base_url('admin/banner/'));
        

    }

    // function to upload image
    public function upload()
    {
        $namafile   = $_FILES['gbr_banner']['name'];
        $ukuranFile = $_FILES['gbr_banner']['size'];
        $error      = $_FILES['gbr_banner']['error'];
        $tempName   = $_FILES['gbr_banner']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg','jpeg','png'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/banner/'.$nama);
            return 'assets/images/banner/'.$nama;
        }
    }
    // end of section of add new static page
    
}