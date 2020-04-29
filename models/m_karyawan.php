<?php 
/**
 * 
 */
class M_karyawan extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('karyawan');
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

	public function detail_data($id_karyawan)
	{
		$query = $this->db->get_where('karyawan', array('id_karyawan' => $id_karyawan))->row();
		return $query;
	}

	public function get_keyword ($keyword)
	{
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->like('id_karyawan', $keyword);
		$this->db->or_like('nama_karyawan', $keyword);
		$this->db->or_like('jenis_kelamin', $keyword);
		return $this->db->get()->result();
	}
}