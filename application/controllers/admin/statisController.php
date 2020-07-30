<?php

class StatisController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }
    
    public function index()
    {
        $data['halaman'] = $this->StaticPageModel->getAllStaticPage();
        $this->load->view('admin/adm_statis_rpage',$data);
        $this->load->view('templates/footer');
    }
    /* 
     Section to create new statis page 
     */
    public function statis_create()
    {
        $this->load->view('admin/adm_statis_cpage');
        $this->load->view('templates/footer');
    }

    // methode to add new data of static page
    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $judul          = $_POST["judul_hlmstat"];
        $isi            = $_POST["isi_hlmsat"];
        $gambar         = $this->upload();
        $addToBeranda   = $_POST["tampilkan_hlmstat"];

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        
            $this->StaticPageModel->add($judul,$isi,$gambar,$addToBeranda);
            redirect(base_url('admin/statisController/'));
        

    }

    // function to upload image
    public function upload()
    {
        $namafile   = $_FILES['gbr_hlmstat']['name'];
        $ukuranFile = $_FILES['gbr_hlmstat']['size'];
        $error      = $_FILES['gbr_hlmstat']['error'];
        $tempName   = $_FILES['gbr_hlmstat']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg','jpeg','png'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/statis/'.$nama);
            return 'assets/images/statis/'.$nama;
        }
    }
    // end of section of add new static page


}
?>