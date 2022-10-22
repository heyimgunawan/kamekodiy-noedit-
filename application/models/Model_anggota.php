<?php


class Model_anggota extends CI_Model {

	public function getAnggotaByID ()
	{
		$this->db->select('*');
		$this->db->from('anggota');
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->row_array();
	}

	public function getAnggotaID ($id_anggota)
	{
		$this->db->select('*');
		$this->db->from('anggota');
        $this->db->where('id_anggota', $id_anggota);
		$query = $this->db->get_where();
		return $query->row_array();
	}

	public function getAllAnggota ()
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->order_by('id_anggota', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAnggota ($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->order_by('id_anggota', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function ubahDataMember($image)
	{
		$data = [
		"nama_anggota" => $this->input->post('nama', true),
        "username" => $this->input->post('username', true),
        "password" => md5($this->input->post('password', true)),
        "no_telp" => $this->input->post('no_telp', true),
        "gambar" => $image
		];
		$this->db->where('id_anggota', $this->input->post('id_anggota'));
		$this->db->update('anggota', $data);
	}

	public function ubahDataMemberTanpaGambar()
	{
		$image = $this->input->post('gambar', true);
		$data = [
		"nama_anggota" => $this->input->post('nama', true),
        "username" => $this->input->post('username', true),
        "password" => md5($this->input->post('password', true)),
        "no_telp" => $this->input->post('no_telp', true),
        "gambar" => $image
		];
		
		$this->db->where('id_anggota', $this->input->post('id_anggota'));
		$this->db->update('anggota', $data);
	}

	public function hitungJumlahMember()
{   
    $query = $this->db->get('anggota');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

}