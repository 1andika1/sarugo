<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spradm_sarugo extends CI_Controller {

	public function checkAdmin()
	{
		// var_dump($this->session->spradmin);die();
		if(!isset($this->session->spradmin)){
			redirect(base_url("admin"));
		}
	}
    public function __construct()
    {	
		parent ::__construct();
		$this->checkAdmin();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_spradm');
        $this->load->model('super_admin/akun_model');
    }

    public function home_page()
    {
		$data = $this->akun_model->count();
        $this->load->view('super_admin/spradm_home_page', ['data' => $data]);
        $this->load->view('templates/footer');
    }

    public function akun_read()
    {
        $rows = $this->akun_model->read();
        $this->load->view('super_admin/spradm_akun_rpage', ['rows' => $rows]);
        $this->load->view('templates/footer');
    }

    public function akun_create()
    {

		// var_dump($_POST);die();
        $config = array(
			array(
				'field' => 'nip_admin',
				'label' => 'NIP Admin',
				'rules' => 'required|alpha_numeric|is_unique[akun.nip_admin]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi angka (1-9) dan huruf (A-Z)',
					'is_unique' => '%s sudah ada didatabase'
				)
			),
			array(
				'field' => 'nama_admin',
				'label' => 'Nama Admin',
				'rules' => 'required|alpha_numeric_spaces',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric_spaces' => '%s hanya berisi huruf (A-Z)'
				)
			),
			array(
				'field' => 'telp_admin',
				'label' => 'Telepon Admin',
				'rules' => 'required|numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'numeric' => '%s hanya berisi angka'
				)
			),
			array(
				'field' => 'email_admin',
				'label' => 'Email Admin',
				'rules' => 'required|valid_email',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'valid_email' => '%s tidak valid'
				)
			),
			array(
				'field' => 'username_admin',
				'label' => 'Username Admin',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi kombinasi angka dan huruf'
				)
			),
			array(
				'field' => 'password_admin',
				'label' => 'Password Admin',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi kombinasi huruf dan angka'
				)
            ),
			array(
				'field' => 'konfpass_admin',
				'label' => 'Password Admin',
				'rules' => 'required|matches[password_admin]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'matches' => '%s tidak sesuai'
				)
			)
		);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
		$this->form_validation->set_rules($config);
		// $_POST["password_admin"] = $_POST["konfpass_admin"]= md5($_POST["password_admin"]);

		if ($this->form_validation->run() == FALSE) {
            $this->load->view('super_admin/spradm_akun_cpage');
            $this->load->view('templates/footer');
		} else {
			$this->db->insert('akun', $_POST);
			redirect('spradm_sarugo/akun_read');
		}
	}
    

    public function akun_update($id)
    {
		
        if (isset($_POST['btnSubmit'])) {
			$this->akun_model->nip_admin = $_POST['nip_admin'];
			$this->akun_model->nama_admin = $_POST['nama_admin'];
			$this->akun_model->telp_admin = $_POST['telp_admin'];
            $this->akun_model->email_admin = $_POST['email_admin'];
			$this->akun_model->username_admin = $_POST['username_admin'];
			$this->akun_model->password_admin = $_POST['password_admin'];
			$this->akun_model->update();
			redirect('spradm_sarugo/akun_read');
		} else {
			$query = $this->db->query("SELECT * from akun where nip_admin='$id'");
			$row = $query->row();
			$this->akun_model->nip_admin= $row->nip_admin;
			$this->akun_model->nama_admin = $row->nama_admin;
			$this->akun_model->telp_admin = $row->telp_admin;
            $this->akun_model->email_admin = $row->email_admin;
            $this->akun_model->username_admin = $row->username_admin;
			$this->akun_model->password_admin = $row->password_admin;
			$this->load->view('super_admin/spradm_akun_upage', ['akun_model' => $this->akun_model]);
		}
        $this->load->view('templates/footer');
	}
	
	

    public function akun_find()
    {
        $this->load->view('super_admin/spradm_akun_rpage');
        $this->load->view('templates/footer');
    }

    function akun_delete($id)
	{
		$this->akun_model->nip_admin = $id;
		$this->akun_model->delete();
		redirect('spradm_sarugo/akun_read');
	}

}
?>