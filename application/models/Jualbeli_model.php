<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jualbeli_model extends CI_Model {
	public function login(){
		$this->load->view('views/form_login');
	}
}