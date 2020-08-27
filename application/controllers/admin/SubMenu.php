<?php

class SubMenu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->sub_menu) && $this->session->admin->sub_menu ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }

    }
    public function index()
    {
        $data["dataSubMenu"] = $this->SubMenuModel->getAllSubMenu(); 
        $data["dataMenu"] = $this->MenuModel->getAllMenu(); 
        $this->load->view('admin/adm_submenu_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data["dataHalaman"] = $this->StaticPageModel->getAllStaticPage();
        $data["dataMenu"] = $this->MenuModel->getAllMenu();  
        $this->load->view('admin/adm_submenu_cpage',$data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $nama_sub_menu = $_POST["nama_sub_menu"];
        $id_menu = $_POST["menu_utama"];
        $hal_statis = $_POST["hal_statis"];
        $status_sub_menu    = isset($_POST["tampilkan"])? $_POST["tampilkan"] : 0;
        $data = array(
            "nama_sub_menu"=>$nama_sub_menu,
            "id_menu" => $id_menu,
            "hal_statis"=>$hal_statis,
            "status_sub_menu"=>$status_sub_menu
        );

        $this->SubMenuModel->addNewSubMenu($data);
        redirect(base_url("admin/submenu"));
    }
    public function update()
    {
        $data["dataHalaman"] = $this->StaticPageModel->getAllStaticPage();
        $data["dataMenu"] = $this->MenuModel->getAllMenu();
        $data["dataSubMenu"] = $this->SubMenuModel->getSubMenuByID($_GET["id"])[0];
        // var_dump($data);die(); 
        $this->load->view('admin/adm_submenu_upage',$data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $nama_sub_menu = $_POST["nama_sub_menu"];
        $id_menu = $_POST["menu_utama"];
        $hal_statis = $_POST["hal_statis"];
        $status_sub_menu    = isset($_POST["tampilkan"])? $_POST["tampilkan"] : 0;
        $data = array(
            "nama_sub_menu"=>$nama_sub_menu,
            "id_menu" => $id_menu,
            "hal_statis"=>$hal_statis,
            "status_sub_menu"=>$status_sub_menu
        );

        $this->SubMenuModel->updateSubMenu($_POST["id"],$data);
        redirect(base_url("admin/submenu"));
    }

    public function delete()
    {
        $this->SubMenuModel->delete($_GET["id"]);
        redirect(base_url("admin/submenu"));
    }

    public function fetch()
    {  
        $q=$_GET["q"];
        $response = "";

        $this->db->like("nama_sub_menu",$q);
        $this->db->or_like("hal_statis",$q);
        $this->db->or_like("id",$q); 
        $data = $this->db->get("submenu")->result();

        if(sizeof($data)>0){
            $counter = 1;
            foreach ($data as $key => $value) {
                $edit = base_url("admin/subMenu/update?id=").$value->id;
                $delete = base_url("admin/subMenu/delete?id=").$value->id;
                $statusStyle = $value->status_sub_menu? "process" : "denied";
                $statusMenu  = $value->status_sub_menu ? "Aktif" : "Nonaktif";
                $nama_menu   = $this->MenuModel->getMenuById()->nama_menu;
                // $nama_menu = $nama_menu->nama_menu;
                var_dump($nama_menu);

                

                $response .='
                <tr class="tr-shadow">
                    <td>'.$counter++.'</td>
                    <td>
                        <span>'. $value->nama_sub_menu .'</span>
                    </td> 
                    <td class="link">'.'hello'.'</td>
                    <td class="link">'.$value->hal_statis.'</td>
                    <td>
                        <span style="font-weight:bold" class="status--'. $statusStyle.'">
                            '.
                             $statusMenu
                            .'
                        </span>
                    </td>
                    <td>
                        <div class="table-data-feature d-flex justify-content-start">
                            <a href="'.$edit.'">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                            </a>
                            <a href="'.$delete .'">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>'; 
 
            }
        }else{
            $response = "<tr class='text-center'>
                    <td colspan='6'>
                        <div class='row justify-content-center'>
                            <h4> SubMenu tidak ditemukan! </h4>
                        </div>
                    </td> 
                </tr>";
        }
        echo $response;
    }
}