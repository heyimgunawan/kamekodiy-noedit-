<?php


class Model_daftar extends CI_Model {

	public function tambahDataMember($image)
	{
		$data = array(
		"tgl_daftar" => $this->input->post('tgl_daftar', true),
		"nama_anggota" => $this->input->post('nama', true),
        "username" => $this->input->post('username', true),
        "password" => md5($this->input->post('password', true)),
        "no_telp" => $this->input->post('no_telp', true),
        "gambar" => $image
);
		$this->db->insert('anggota', $data);
	}

}