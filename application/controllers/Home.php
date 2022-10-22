<?php

class Home Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['berita']= $this->Model_berita->getAllBeritaHome();
		$data['kategori']= $this->Model_kategori->getAllKategori();
		$data['update']= $this->Model_berita->getAllBeritaUpdate();
		$this->load->view('home/index', $data);
	}

}