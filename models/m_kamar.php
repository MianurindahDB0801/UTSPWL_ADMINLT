<?php 
/**
 * 
 */
class M_kamar extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('kamar');
	}
	public function input_data($data, $table)
	{
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
		
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function detail_data($no_kamar)
	{
		$query = $this->db->get_where('kamar', array('no_kamar' => $no_kamar))->row();
		return $query;
	}

	public function get_keyword ($keyword)
	{
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->like('no_kamar', $keyword);
		$this->db->or_like('jenis_kamar', $keyword);
		$this->db->or_like('harga', $keyword);
		return $this->db->get()->result();
	}
}