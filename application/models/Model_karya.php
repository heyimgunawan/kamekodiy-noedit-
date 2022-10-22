<?php


class Model_karya extends CI_Model {

	public function getAllKarya ()
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('id_karya', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllKaryaById ()
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('id_karya', 'DESC');
		$username = $this->session->userdata('username');
        $this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->result_array();
	}

	public function tambahDataKarya($image)
	{
		$data = array(
		"id_kategori" => $this->input->post('id_kategori', true),
        "id_anggota" => $this->input->post('id_anggota', true),
        "nama_karya" => $this->input->post('nama_karya', true),
        "foto_karya" => $image
);
		$this->db->insert('karya', $data);
	}

	public function cariDataKarya()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->like('nama_kategori', $keyword);
		$this->db->or_like('nama_anggota', $keyword);
		return $this->db->get()->result_array();
	}

	public function getKarya ($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('id_karya', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getKaryaById ($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('id_karya', 'DESC');
		$this->db->limit($limit, $offset);
		$username = $this->session->userdata('username');
        $this->db->where('username', $username);
		$query = $this->db->get_where();
		return $query->result_array();
	}

	public function getKaryaId ($id_karya)
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('id_karya', 'DESC');
        $this->db->where('id_karya', $id_karya);
		$query = $this->db->get_where();
		return $query->row_array();
	}

	public function hitungJumlahKarya()
{   
    $query = $this->db->get('karya');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	
	public function hapusDataKarya($id_karya)
	{
		$this->db->where('id_karya', $id_karya);
		$this->db->delete('karya');
	}

	public function ubahDataKarya($image)
	{
		$data = [
		"id_kategori" => $this->input->post('id_kategori', true),
        "id_anggota" => $this->input->post('id_anggota', true),
        "nama_karya" => $this->input->post('nama_karya', true),
        "foto_karya" => $image
		];
		
		$this->db->where('id_karya', $this->input->post('id_karya'));
		$this->db->update('karya', $data);
	}

	public function ubahDataKaryaTanpaGambar()
	{
		$image = $this->input->post('foto_karya', true);
		$data = [
		"id_kategori" => $this->input->post('id_kategori', true),
        "id_anggota" => $this->input->post('id_anggota', true),
        "nama_karya" => $this->input->post('nama_karya', true),
        "foto_karya" => $image
		];
		
		$this->db->where('id_karya', $this->input->post('id_karya'));
		$this->db->update('karya', $data);
	}

}