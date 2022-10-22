<?php

class News Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($offset=null)
	{
		$config['base_url'] = 'http://localhost/kameko/News/index';
		$config['total_rows'] = $this->Model_berita->hitungJumlahBerita();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['offset'] = $offset;
		
		// Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$data["links"] = $this->pagination->create_links();

		$data['berita']= $this->Model_berita->getAllBerita();
		$data['berita']= $this->Model_berita->getBerita($config["per_page"], $offset);
		$this->load->view('news/index', $data);
	}

	public function detail($id_berita)
	{
		$data['berita']= $this->Model_berita->getBeritaByID($id_berita);
		$data['news']= $this->Model_berita->getAllBerita();
		$this->load->view('news/detail', $data);
	}

}