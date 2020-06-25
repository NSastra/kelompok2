<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
	
	private $_table = "jualbeli";
	
	public $id_prod;
	public $nama_prod;
	public $harga_prod;
	public $gambar = "default.jpg";
	public $deskripsi;
	
	public function rules(){
		return [
			['field'] => 'nama_prod',
			 'label' => 'Nama Produk',
			 'rules' => 'required'],
			 
			 ['field'] => 'harga_prod',
			 'label' => 'Harga Produk',
			 'rules' => 'required'],
			 
			 ['field'] => 'deskripsi',
			 'label' => 'Deskripsi',
			 'rules' => 'required']
			 ];
		}
		
	public function getAll(){
		return $this->db->get($this->_table)->result();
	}
	
	public function getById($id){
		return $this->db->get_where($this->_table, ["id_prod" => $id])->row();
	}
	
	public function save(){
		$post =$this->input->post();
		$this->id_prod = uniqid();
		$this->nama_prod = $post["Nama Produk"];
		$this->harga_prod = $post["Harga Produk"];
		$this->description = $post["Deskripsi"];
		return $this->db->insert($this->_table, $this);
	}
	
	public function update(){
		$post =$this->input->post();
		$this->id_prod = uniqid();
		$this->nama_prod = $post["id"];
		$this->harga_prod = $post["Harga Produk"];
		$this->description = $post["Deskripsi"];
		return $this->db->update($this->_table, $this, array('id_prod' => $post['id']));
	}
	
	public function delete($id){
		return $this->db->delete($this->_table, array("id_prod" => $id));
	}
}