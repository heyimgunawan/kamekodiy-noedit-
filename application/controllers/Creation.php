<?php

class Creation Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Creation"));
		}
	}

	public function index($offset=null)
	{
		$config['base_url'] = 'http://localhost/kameko/Creation/index';
		$config['total_rows'] = $this->Model_karya->hitungJumlahKarya();
		$config["per_page"] = 10;
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

		$data['karya']= $this->Model_karya->getAllKaryaById();
		$data['karya']= $this->Model_karya->getKaryaById($config["per_page"], $offset);
		$this->load->view('karya/index', $data);
	}

	public function tambah()
	{
		$config['upload_path']          = './hasil_karya/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

        $data['kategori']= $this->Model_kategori->getAllKategori();
        $data['anggota']= $this->Model_anggota->getAnggotaByID();

        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('nama_karya', 'Nama Karya', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('karya/tambah', $data);
		} else if (! $this->upload->do_upload('foto_karya') == null) {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Model_karya->tambahDataKarya($image);
			redirect('Creation');
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Model_karya->tambahDataKarya($image);
			redirect('Creation');
		}

	}

	public function ubah($id_karya=null)
	{
		$config['upload_path']          = './hasil_karya/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

        $data['kategori']= $this->Model_kategori->getAllKategori();
        $data['anggota']= $this->Model_anggota->getAnggotaByID();
        $data['karya']= $this->Model_karya->getKaryaId($id_karya);

        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('nama_karya', 'Nama Karya', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('karya/ubah', $data);
		} else if (! $this->upload->do_upload('foto_karya')) {
			$this->Model_karya->ubahDataKaryaTanpaGambar();
			redirect('Creation');
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Model_karya->ubahDataKarya($image);
			redirect('Creation');
		}

	}

	public function hapus($id_karya)
	{
		$this->Model_karya->hapusDataKarya($id_karya);
		redirect('Creation');
	}


}