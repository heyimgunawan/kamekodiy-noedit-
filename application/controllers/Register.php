<?php

class Register Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('register/index');
	}

	public function tambah()
	{
		$config['upload_path']          = './anggota/';
        $config['allowed_types']        = 'jpg|png|jpeg|JPG|PNG';
        $config['max_size']             = '0';
        $config['max_width']            = '0';
        $config['max_height']           = '0';

        $this->load->library('upload',$config); //call library upload 
        $this->upload->initialize($config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('register/tambah');
		} else if (! $this->upload->do_upload('gambar') == null) {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Model_daftar->tambahDataMember($image);
			redirect('login');
		} else {
			$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name']; //set file name ke variable image
			$this->Model_daftar->tambahDataMember($image);
			redirect('login');
		}
	}

}