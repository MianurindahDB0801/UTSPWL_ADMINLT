<?php 
/**
 * 
 */
class M_transaksi extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('transaksi');
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

	public function detail_data($no_transaksi)
	{
		$query = $this->db->get_where('transaksi', array('no_transaksi' => $no_transaksi))->row();
		return $query;
	}

	public function get_keyword ($keyword)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->like('no_transaksi', $keyword);
		$this->db->or_like('id_pengunjung', $keyword);
		$this->db->or_like('id_karyawan', $keyword);
		$this->db->or_like('tgl_masuk', $keyword);
		$this->db->or_like('tgl_keluar', $keyword);
		$this->db->or_like('no_kamar', $keyword);
		$this->db->or_like('lama_inap', $keyword);
		$this->db->or_like('total_harga', $keyword);
		return $this->db->get()->result();
	}
}