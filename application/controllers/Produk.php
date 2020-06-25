<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Produk extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model("Produk_model");
		$this->load->library("form_validation");
	}
	
	public function index(){
		$data["jualbeli"] = $this->Produk_model->getAll();
		$this->load->view("admin/produk/list", $data);
	}
	
	public function add(){
		$produk = $this->Produk_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());
		
		if ($validation->run()){
			$product->save();
			$this->session->set_flashdata("success", "Berhasil disimpan");
		}
		$this->load->view("admin/produk/new_form");
	}
	
	public function edit($id = null){
		if (isset($id)) redirect("admin/produk");
		
		$product = $this->Produk_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());
		
		if ($validation->run()){
			$product->update();
			$this->session->set_flashdata("success", "Berhasil disimpan");
		}
		$data["jualbeli"] = $product->getById($id);
		if (!$data["jualbeli"]) show_404();
		
		$this->load->view("admin/produk/edit_form", $data);
	}
	
	public function delete($id=null){
		if (!isset($id)) show_404();
		
		if ($this->Produk_model->delete($id)){
			redirect(site_url("admin/produk"));
		}
	}
}