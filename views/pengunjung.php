<div class="content-wrapper">
	<section class="content-wrapper">
		        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

	</section>

	<section class="content-wrapper">
		<?php echo $this->session->flashdata('message'); ?>

		<button class="btn btn-primary ml-2  mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Pengunjung</button>

		<a class="btn btn-danger ml-2 mb-2" href="<?php echo base_url('index.php/pengunjung/cetak')  ?>"> <i class="fa fa-print"></i>Print</a>

		<div class="form-inline mr-auto float-sm-right  navbar-form navbar-right">
			<div class="input-group">
				<?php echo form_open('pengunjung/search') ?>
				<input type="text" name="keyword" class="form-control" placeholder="Search">
				<button type="submit" class="btn btn-success ">
					<i class="fa fa-search"></i>
				</button>
				<?php echo form_close() ?>
			</div>
		</div>
		<table class="table">
			<tr>
				<th>No</th>
				<th>ID Pengunjung</th>
				<th>Nama Pengunjung</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Telepon</th>
				<th>Nomor KTP</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php

			$no=1;
			foreach ($pengunjung as $peng ) : ?>
				<tr>
					<td><?php echo $no++ ?></td>	
					<td><?php echo $peng->id_pengunjung ?></td>
					<td><?php echo $peng->nama_pengunjung ?></td>
					<td><?php echo $peng->alamat ?></td>
					<td><?php echo $peng->jenis_kelamin ?></td>
					<td><?php echo $peng->no_tlp ?></td>
					<td><?php echo $peng->no_ktp ?></td>
					<td><?php echo anchor('pengunjung/detail/'.$peng->id_pengunjung,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('pengunjung/hapus/'.$peng->id_pengunjung, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('pengunjung/edit/'.$peng->id_pengunjung,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				</tr>

			<?php endforeach; ?>
		</table>
	</section>
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">FORM INPUT</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url().'index.php/pengunjung/tambah_aksi'; ?>">
					
					<div class="form-group">
						<label>ID Pengunjung</label>
						<input type="text" name="id_pengunjung" class="form-control">
					</div>

					<div class="form-group">
						<label>Nama Pengunjung</label>
						<input type="text" name="nama_pengunjung" class="form-control">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control">
					</div>

					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" name="jenis_kelamin" class="form-control">
					</div>

					<div class="form-group">
						<label>Nomor Telepon</label>
						<input type="text" name="no_tlp" class="form-control">
					</div>

					<div class="form-group">
						<label>Nomor KTP</label>
						<input type="text" name="no_ktp" class="form-control">
					</div>

					<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
					<button type="submit" class="btn btn-primary">Save</button>

				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>