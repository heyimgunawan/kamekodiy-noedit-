<?php


class Model_berita extends CI_Model {

	public function getAllBerita ()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'admin.id_admin = berita.id_admin');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllBeritaHome ()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'admin.id_admin = berita.id_admin');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllBeritaUpdate ()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'admin.id_admin = berita.id_admin');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBeritaByID ($id_berita)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'admin.id_admin = berita.id_admin');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->where('id_berita', $id_berita);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function getBerita ($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('admin', 'admin.id_admin = berita.id_admin');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hitungJumlahBerita()
{   
    $query = $this->db->get('berita');
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