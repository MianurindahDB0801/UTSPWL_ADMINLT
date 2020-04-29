<?php
/**
 * 
 */
class Karyawan extends CI_Controller
{

	public function index ()
	{
		$data['karyawan'] = $this->m_karyawan->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('karyawan',$data);
		$this->load->view('template/footer');
	}


	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('karyawan');
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$id_karyawan 	 = $this->input->post('id_karyawan');
		$nama_karyawan   = $this->input->post('nama_karyawan');
		$jenis_kelamin   = $this->input->post('jenis_kelamin');

		$data = array(
			'id_karyawan' 		=>$id_karyawan,
			'nama_karyawan' 	=>$nama_karyawan,
			'jenis_kelamin' 		=>$jenis_kelamin,
		);

		$this->m_kamar->input_data($data, 'karyawan');
		$this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible" role="alert"> Data Berhasil Ditambahkan!
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		redirect('karyawan/index');		
				}

	public function hapus ($id_karyawan)
	{
		$where = array('id_karyawan' => $id_karyawan);
		$this->m_karyawan->hapus_data($where,'karyawan');
		redirect('karyawan/index');
	}

	public function edit ($id_karyawan)
	{
		$where = array('id_karyawan' => $id_karyawan);
		$data['karyawan'] = $this->m_karyawan->edit_data($where,'karyawan')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit_karyawan',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id_karyawan = $this->input->post('id_karyawan');
		$nama_karyawan = $this->input->post('nama_karyawan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');

		$data = array(
			'id_karyawan' 		=>$id_karyawan,
			'nama_karyawan' 	=>$nama_karyawan,
			'jenis_kelamin' 		=>$jenis_kelamin,
		);

		$where = array(
			'id_karyawan'   => $id_karyawan
		);

		$this->m_karyawan->update_data($where,$data,'karyawan');
		redirect('karyawan/index');
	}

	public function detail($id_karyawan)
	{
		$this->load->model('m_karyawan');
		$detail = $this->m_karyawan->detail_data($id_karyawan);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('detail_karyawan',$data);
		$this->load->view('template/footer');
	}

	public function cetak()
	{
		$data['karyawan'] = $this->m_karyawan->tampil_data('karyawan')->result();
		$this->load->view('print_karyawan', $data);

	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['karyawan']=$this->m_karyawan->get_keyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('karyawan',$data);
		$this->load->view('template/footer');
	}
}