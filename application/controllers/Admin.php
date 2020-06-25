<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		
		if($this->session->userdata('status') != "Login"){
			redirect("login");
		}
	}
	
	public function index(){
		$this->load->view("admin_view");
	}
}