<?php

class Member Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($offset=null)
	{
		$config['base_url'] = 'http://localhost/kameko/Member/index';
		$config['total_rows'] = $this->Model_anggota->hitungJumlahMember();
		$config["per_page"] = 9;
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

		$data['anggota']= $this->Model_anggota->getAllAnggota();
		$data['anggota']= $this->Model_anggota->getAnggota($config["per_page"], $offset);
		$this->load->view('anggota/index', $data);
	}

	public function detail($id_anggota)
	{
		$data['anggota']= $this->Model_anggota->getAnggotaID($id_anggota);
		$this->load->view('anggota/detail', $data);
	}

}