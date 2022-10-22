<?php

class Category Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($id_kategori)
	{
		$data['kategori']= $this->Model_kategori->getAllKategoriById($id_kategori);
		$data['category']= $this->Model_kategori->getKategoriById($id_kategori);
		$this->load->view('kategori/index', $data);
	}

}
