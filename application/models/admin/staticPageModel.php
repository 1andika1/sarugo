<?php
class StaticPageModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function add($judul,$isi,$gambar,$tampilkanKeBeranda)
    {
        $data= array(
            "judul"=>$judul,
            "isi"   => $isi,
            "gambar"=> $gambar,
            "add_to_beranda" => $tampilkanKeBeranda,
        );

        $this->db->insert("hal_statis",$data);
    }
}