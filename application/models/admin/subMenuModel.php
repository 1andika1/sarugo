<?php

class SubMenuModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }

    public function getAllSubMenu()
    {
        return $this->db->get("submenu")->result();
    }
}