<?php

class Berita extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }

    public function index()
    {
        $data["dataBerita"] = $this->BeritaModel->getAllBerita();
        $this->load->view('admin/adm_berita_rpage',$data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->view('admin/adm_berita_cpage');
        $this->load->view('templates/footer');
    }
    public function edit()
    {   $data["dataBerita"] = $this->BeritaModel->getBeritaByID($_GET["id_berita"])[0]; 
         
        $this->load->view('admin/adm_berita_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $judul_berita        = $_POST["judul_berita"];
        $keterangan         = $_POST["isi_berita"]; 
        $gambar             = $this->upload();
        $tgl_post           = date("Y:m:d h:i");
         

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul_berita"=>$judul_berita,
            "gambar"=>$gambar  ,
            "keterangan"=>$keterangan,
            "tgl_post" =>$tgl_post,
             
        );

        
            $this->BeritaModel->addNewBerita($data);
            redirect(base_url('admin/Berita/'));
        

    }

    // function to upload image
    public function upload()
    {
        

        $namafile   = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error      = $_FILES['gambar']['error'];
        $tempName   = $_FILES['gambar']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg','jpeg','png'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/berita/'.$nama);
            return 'assets/images/berita/'.$nama;
        }
    } 

    public function update()
    { 

        //  var_dump($_POST,$_FILES);die();
        $judul_berita        = $_POST["judul_berita"];
        $keterangan         = $_POST["isi_berita"]; 
        $gambar             = $this->upload();
        $tgl_post           = date("Y:m:d h:i");

        if(!$gambar){
            $gambar = $this->db->get_where("berita",["id_berita"=>$_POST["id_berita"]])->result()[0]->gambar;

        } 

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul_berita"=>$judul_berita,
            "gambar"=>$gambar  ,
            "keterangan"=>$keterangan,
            "tgl_post" =>$tgl_post,
             
        );
        
            $this->BeritaModel->update($_POST["id_berita"],$data);
            redirect(base_url('admin/berita/'));
        
    }

    // delete page
    public function delete()
    {
       $this->BeritaModel->delete($_GET["id_berita"]);
       redirect(base_url("admin/berita"));
    }


}