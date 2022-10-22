<?php

class Login Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password));
		$cek = $this->Model_login->cek_login('anggota',$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("home"));
 
		}
		else
		{
			$this->session->set_flashdata('gagal', 'Periksa Kembali Username dan Password Anda');
			redirect(base_url("login"));
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}

}