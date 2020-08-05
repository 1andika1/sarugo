<?php 

class BannerModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }


    public function add($data)
    {
       $this->db->insert("banner",$data);
    }
}