<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		
		if($this->session->userdata('status') != "Login"){
			redirect("login");
		}
		//$this->load->model('Jualbeli_model');
	}
	
	public function index(){
		//$data['tbl_barang'] = $this->Jualbeli_model->view();
		$this->load->view("admin_view");

	}
	
}