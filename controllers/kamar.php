<?php
/**
 * 
 */
class Kamar extends CI_Controller
{

	public function index ()
	{
		$data['kamar'] = $this->m_kamar->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kamar',$data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kamar');
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$no_kamar 	 = $this->input->post('no_kamar');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$harga 		 = $this->input->post('harga');

		$data = array(
			'no_kamar' 		=>$no_kamar,
			'jenis_kamar' 	=>$jenis_kamar,
			'harga' 		=>$harga,
		);

		$this->m_kamar->input_data($data, 'kamar');
		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible" role="alert"> Data Berhasil Ditambahkan!
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		redirect('kamar/index');		
				}

	public function hapus ($no_kamar)
	{
		$where = array('no_kamar' => $no_kamar);
		$this->m_kamar->hapus_data($where,'kamar');
		redirect('kamar/index');
	}

	public function edit ($no_kamar)
	{
		$where = array('no_kamar' => $no_kamar);
		$data['kamar'] = $this->m_kamar->edit_data($where,'kamar')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$no_kamar = $this->input->post('no_kamar');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$harga = $this->input->post('harga');

		$data = array(
			'no_kamar' 		=>$no_kamar,
			'jenis_kamar' 	=>$jenis_kamar,
			'harga' 		=>$harga,
		);

		$where = array(
			'no_kamar'   => $no_kamar
		);

		$this->m_kamar->update_data($where,$data,'kamar');
		redirect('kamar/index');
	}

	public function detail($no_kamar)
	{
		$this->load->model('m_kamar');
		$detail = $this->m_kamar->detail_data($no_kamar);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail',$data);
		$this->load->view('template/footer');
	}

	public function cetak()
	{
		$data['kamar'] = $this->m_kamar->tampil_data('kamar')->result();
		$this->load->view('print_kamar', $data);

	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['kamar']=$this->m_kamar->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kamar',$data);
		$this->load->view('template/footer');
	}
}