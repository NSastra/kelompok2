<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Login_model');
		$this->load->model('Jualbeli_model');
		$this->load->helper('url');
	}
	
	public function index(){	
		$data['tbl_barang'] = $this->Jualbeli_model->view();
		$this->load->view('login/login', $data);
		
	}

	public function register(){
		$this->load->view('login/daftar');
	}
	
	public function aksi_login(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username,
					   'password' => ($password));
		
		$cek = $this->Login_model->cek_login("admin", $where)->num_rows();
		//var_dump($cek);
		
		if($cek > 0){
			$data_session = array('nama' => $username,
								  'status' => "Login");
		
		$this->session->set_userdata($data_session);
		//redirect(base_url("Admin"));
		//$this->load->view("admin/view");
		redirect("Admin");
		} else {
			redirect("Incorrect");
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("Login"));
		//redirect('Login/index');
	}
	
}
