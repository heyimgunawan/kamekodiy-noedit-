<?php

class About Extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['about']= $this->Model_about->getAllAbout();
		$this->load->view('About/index', $data);
	}

}