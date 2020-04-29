<?php
/**
 * 
 */
class Pengunjung extends CI_Controller
{

	public function index ()
	{
		$data['pengunjung'] = $this->m_pengunjung->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pengunjung',$data);
		$this->load->view('template/footer');
	}


	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pengunjung');
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$id_pengunjung 	   = $this->input->post('id_pengunjung');
		$nama_pengunjung   = $this->input->post('nama_pengunjung');
		$alamat  		   = $this->input->post('alamat');
		$jenis_kelamin     = $this->input->post('jenis_kelamin');
		$no_tlp  		   = $this->input->post('no_tlp');
		$no_ktp  		   = $this->input->post('no_ktp');

		$data = array(
			'id_pengunjung' 	=>$id_pengunjung,
			'nama_pengunjung' 	=>$nama_pengunjung,
			'alamat' 			=>$alamat,
			'jenis_kelamin' 	=>$jenis_kelamin,
			'no_tlp' 			=>$no_tlp,
			'no_ktp' 			=>$no_ktp,
		);

		$this->m_pengunjung->input_data($data, 'pengunjung');
		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible" role="alert"> Data Berhasil Ditambahkan!
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		redirect('pengunjung/index');		
				}

	public function hapus ($id_pengunjung)
	{
		$where = array('id_pengunjung' => $id_pengunjung);
		$this->m_pengunjung->hapus_data($where,'pengunjung');
		redirect('pengunjung/index');
	}

	public function edit ($id_pengunjung)
	{
		$where = array('id_pengunjung' => $id_pengunjung);
		$data['pengunjung'] = $this->m_pengunjung->edit_data($where,'pengunjung')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit_pengunjung',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id_pengunjung 	   = $this->input->post('id_pengunjung');
		$nama_pengunjung   = $this->input->post('nama_pengunjung');
		$alamat  		   = $this->input->post('alamat');
		$jenis_kelamin     = $this->input->post('jenis_kelamin');
		$no_tlp  		   = $this->input->post('no_tlp');
		$no_ktp  		   = $this->input->post('no_ktp');

		$data = array(
			'id_pengunjung' 	=>$id_pengunjung,
			'nama_pengunjung' 	=>$nama_pengunjung,
			'alamat' 			=>$alamat,
			'jenis_kelamin' 	=>$jenis_kelamin,
			'no_tlp' 			=>$no_tlp,
			'no_ktp' 			=>$no_ktp,
		);

		$where = array(
			'id_pengunjung'   => $id_pengunjung
		);

		$this->m_pengunjung->update_data($where,$data,'pengunjung');
		redirect('pengunjung/index');
	}

	public function detail($id_pengunjung)
	{
		$this->load->model('m_pengunjung');
		$detail = $this->m_pengunjung->detail_data($id_pengunjung);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_pengunjung',$data);
		$this->load->view('template/footer');
	}

	public function cetak()
	{
		$data['pengunjung'] = $this->m_pengunjung->tampil_data('pengunjung')->result();
		$this->load->view('print_pengunjung', $data);

	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['pengunjung']=$this->m_pengunjung->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pengunjung',$data);
		$this->load->view('template/footer');
	}
}


