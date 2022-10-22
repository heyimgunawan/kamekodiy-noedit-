<?php


class Model_kategori extends CI_Model {

	public function getAllKategori ()
	{
	return $query = $this->db->get('kategori')->result_array();
	}

	public function getAllKategoriById ($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('kategori.id_kategori', 'DESC');
        $this->db->where('kategori.id_kategori', $id_kategori);
		$query = $this->db->get_where();
		return $query->row_array();
	}

	public function getKategoriById ($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('karya');
		$this->db->join('kategori', 'kategori.id_kategori = karya.id_kategori');
		$this->db->join('anggota', 'anggota.id_anggota = karya.id_anggota');
		$this->db->order_by('kategori.id_kategori', 'DESC');
        $this->db->where('kategori.id_kategori', $id_kategori);
		$query = $this->db->get_where();
		return $query->result_array();
	}

}