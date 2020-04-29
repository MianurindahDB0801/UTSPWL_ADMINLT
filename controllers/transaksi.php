<?php
/**
 * 
 */
class Transaksi extends CI_Controller
{

	public function index ()
	{
		$data['transaksi'] = $this->m_transaksi->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('transaksi',$data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('transaksi');
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$no_transaksi    = $this->input->post('no_transaksi');
		$id_pengunjung 	 = $this->input->post('id_pengunjung');
		$id_karyawan  	 = $this->input->post('id_karyawan');
		$tgl_masuk   	 = $this->input->post('tgl_masuk');
		$tgl_keluar  	 = $this->input->post('tgl_keluar');
		$no_kamar   	 = $this->input->post('no_kamar');
		$lama_inap   	 = $this->input->post('lama_inap');
		$total_harga   	 = $this->input->post('total_harga');

		$data = array(
			'no_transaksi' 		=>$no_transaksi,
			'id_pengunjung' 	=>$id_pengunjung,
			'id_karyawan' 		=>$id_karyawan,
			'tgl_masuk' 		=>$tgl_masuk,
			'tgl_keluar' 		=>$tgl_keluar,
			'no_kamar' 			=>$no_kamar,
			'lama_inap' 		=>$lama_inap,
			'total_harga' 		=>$total_harga,
		);

		$this->m_transaksi->input_data($data, 'transaksi');
		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible" role="alert"> Data Berhasil Ditambahkan!
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		redirect('transaksi/index');		
				}

	public function hapus ($no_transaksi)
	{
		$where = array('no_transaksi' => $no_transaksi);
		$this->m_transaksi->hapus_data($where,'transaksi');
		redirect('transaksi/index');
	}

	public function edit ($no_transaksi)
	{
		$where = array('no_transaksi' => $no_transaksi);
		$data['transaksi'] = $this->m_transaksi->edit_data($where,'transaksi')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$no_transaksi    = $this->input->post('no_transaksi');
		$id_pengunjung 	 = $this->input->post('id_pengunjung');
		$id_karyawan     = $this->input->post('id_karyawan');
		$tgl_masuk   	 = $this->input->post('tgl_masuk');
		$tgl_keluar   	 = $this->input->post('tgl_keluar');
		$no_kamar   	 = $this->input->post('no_kamar');
		$lama_inap   	 = $this->input->post('lama_inap');
		$total_harga     = $this->input->post('total_harga');

		$data = array(
			'no_transaksi' 		=>$no_transaksi,
			'id_pengunjung' 	=>$id_pengunjung,
			'id_karyawan' 		=>$id_karyawan,
			'tgl_masuk' 		=>$tgl_masuk,
			'tgl_keluar' 		=>$tgl_keluar,
			'no_kamar' 			=>$no_kamar,
			'lama_inap' 		=>$lama_inap,
			'total_harga' 		=>$total_harga,
		);

		$where = array(
			'no_transaksi'   => $no_transaksi
		);

		$this->m_transaksi->update_data($where,$data,'transaksi');
		redirect('transaksi/index');
	}

	public function detail($no_transaksi)
	{
		$this->load->model('m_transaksi');
		$detail = $this->m_transaksi->detail_data($no_transaksi);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function cetak()
	{
		$data['transaksi'] = $this->m_transaksi->tampil_data('transaksi')->result();
		$this->load->view('print_transaksi', $data);

	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['transaksi']=$this->m_transaksi->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('transaksi',$data);
		$this->load->view('template/footer');
	}
}