<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jualbeli_model extends CI_Model {
	public function view(){
		return $this->db->get('tbl_barang')->result();
	}
}