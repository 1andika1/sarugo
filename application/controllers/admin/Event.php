<?php

class Event extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }

    public function index()
    {
        $data["dataEvent"] = $this->EventModel->getAllEvent();
        $this->load->view('admin/adm_event_rpage',$data );
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->view('admin/adm_event_cpage');
        $this->load->view('templates/footer');
    }
    public function edit()
    {   $data["dataEvent"] = $this->EventModel->getEventByID($_GET["id_event"])[0]; 
         
        $this->load->view('admin/adm_event_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_event        = $_POST["nama_event"];
        $tgl_awal         = $_POST["tgl_awal"]; 
        $tgl_akhir         = $_POST["tgl_akhir"]; 
        $lama_event         = $_POST["lama_event"]; 
        $keterangan         = $_POST["keterangan"]; 
        $gambar             = $this->upload(); 
         

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_event"=>$nama_event,
            "tgl_awal"=>$tgl_awal  ,
            "tgl_akhir"=>$tgl_akhir,
            "lama_event" =>$lama_event,
            "keterangan" =>$keterangan,
            "gambar" =>$gambar, 
             
        );

        
            $this->EventModel->addNewEvent($data);
            redirect(base_url('admin/event/'));
        

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
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/event/'.$nama);
            return 'assets/images/event/'.$nama;
        }
    } 

    public function update()
    { 

       // var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_event        = $_POST["nama_event"];
        $tgl_awal         = $_POST["tgl_awal"]; 
        $tgl_akhir         = $_POST["tgl_akhir"]; 
        $lama_event         = $_POST["lama_event"]; 
        $keterangan         = $_POST["keterangan"]; 
        $gambar             = $this->upload(); 

        if(!$gambar){
            $gambar = $this->db->get_where("event",["id_event"=>$_POST["id_event"]])->result()[0]->gambar;

        } 

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_event"=>$nama_event,
            "tgl_awal"=>$tgl_awal  ,
            "tgl_akhir"=>$tgl_akhir,
            "lama_event" =>$lama_event,
            "keterangan" =>$keterangan,
            "gambar" =>$gambar, 
             
        );
        
            $this->EventModel->update($_POST["id_event"],$data);
            redirect(base_url('admin/event/'));
        
    }

    // delete page
    public function delete()
    {
       $this->EventModel->delete($_GET["id_event"]);
       redirect(base_url("admin/event"));
    }


}