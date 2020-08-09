<?php 

class Produk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');
    }
    
    public function index()
    {
        $data['dataProduk'] = $this->ProdukModel->getAllProduk();
        $this->load->view('admin/adm_produk_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/adm_produk_cpage');
        $this->load->view('templates/footer');
    } 

    public function edit()
    {   $data["produk"] = $this->ProdukModel->getProdukByID($_GET["id_produk"])[0];  
        
        $this->load->view('admin/adm_produk_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_produk        = $_POST["nama_produk"];
        $harga_satuan         = $_POST["harga_satuan"];
        $berat_satuan             = $_POST["berat_satuan"];
        $komposisi             = $_POST["komposisi"];
        $keterangan             = $_POST["keterangan"];
        $penjelasan_produk             = $_POST["penjelasan_produk"]; 
        $gambar             = $this->upload();
         

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_produk"=>$nama_produk,
            "gambar"=>$gambar  ,
            "harga_satuan"=>$harga_satuan,
            "komposisi"=>$komposisi,
            "keterangan"=>$keterangan,
            "penjelasan_produk"=>$penjelasan_produk,
            "berat_satuan"=>$berat_satuan,
        );

        
            $this->ProdukModel->addNewProduk($data);
            redirect(base_url('admin/produk/'));
        

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
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/produk/'.$nama);
            return 'assets/images/produk/'.$nama;
        }
    } 

    public function update()
    { 
        //  var_dump($_POST,$_FILES);die();

         $nama_produk        = $_POST["nama_produk"];
         $harga_satuan         = $_POST["harga_satuan"];
         $berat_satuan             = $_POST["berat_satuan"];
         $komposisi             = $_POST["komposisi"];
         $keterangan             = $_POST["keterangan"];
         $penjelasan_produk             = $_POST["penjelasan_produk"]; 
         $gambar             = $this->upload();

        if(!$gambar){
            $gambar = $this->db->get_where("produk",["id_produk"=>$_POST["id_produk"]])->result()[0]->gambar;

        } 

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_produk"=>$nama_produk,
            "gambar"=>$gambar  ,
            "harga_satuan"=>$harga_satuan,
            "komposisi"=>$komposisi,
            "keterangan"=>$keterangan,
            "penjelasan_produk"=>$penjelasan_produk,
            "berat_satuan"=>$berat_satuan,
        );

        
            $this->ProdukModel->update($_POST["id_produk"],$data);
            redirect(base_url('admin/produk/'));
        
    }

    // delete page
    public function delete()
    {
       $this->ProdukModel->delete($_GET["id_produk"]);
       redirect(base_url("admin/wisata"));
    }

     

 
 
}