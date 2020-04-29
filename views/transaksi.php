<div class="content-wrapper">
	<section class="content-wrapper">
		        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

	</section>

	<section class="content-wrapper">
		<?php echo $this->session->flashdata('message'); ?>

		<button class="btn btn-primary ml-2  mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Transaksi</button>

		<a class="btn btn-danger ml-2 mb-2" href="<?php echo base_url('index.php/transaksi/cetak')  ?>"> <i class="fa fa-print"></i>Print</a>

		<div class="form-inline mr-auto float-sm-right  navbar-form navbar-right">
			<div class="input-group">
				<?php echo form_open('transaksi/search') ?>
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
				<th>Nomor Transaksi</th>
				<th>ID Pengunjung</th>
				<th>ID Karyawan</th>
				<th>Tanggal Masuk</th>
				<th>Tanggal Keluar</th>
				<th>Nomor Kamar</th>
				<th>Lama Inap</th>
				<th>Total Harga</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php

			$no=1;
			foreach ($transaksi as $tran ) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tran->no_transaksi ?></td>
					<td><?php echo $tran->id_pengunjung ?></td>
					<td><?php echo $tran->id_karyawan ?></td>
					<td><?php echo $tran->tgl_masuk ?></td>
					<td><?php echo $tran->tgl_keluar ?></td>
					<td><?php echo $tran->no_kamar ?></td>
					<td><?php echo $tran->lama_inap ?></td>
					<td><?php echo $tran->total_harga ?></td>
					<td><?php echo anchor('transaksi/detail/'.$tran->no_transaksi,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('transaksi/hapus/'.$tran->no_transaksi, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('transaksi/edit/'.$tran->no_transaksi,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
				<form method="post" action="<?php echo base_url().'index.php/transaksi/tambah_aksi'; ?>">
					
					<div class="form-group">
						<label>No transaksi</label>
						<input type="text" name="no_transaksi" class="form-control">
					</div>

					<div class="form-group">
						<label>ID Pengunjung</label>
						<input type="text" name="id_pengunjung" class="form-control">
					</div>

					<div class="form-group">
						<label>ID Karyawan</label>
						<input type="text" name="id_karyawan" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Masuk</label>
						<input type="text" name="tgl_masuk" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Keluar</label>
						<input type="text" name="tgl_keluar" class="form-control">
					</div>

					<div class="form-group">
						<label>Nomor Kamar</label>
						<input type="text" name="no_kamar" class="form-control">
					</div>

					<div class="form-group">
						<label>Lama Inap</label>
						<input type="text" name="lama_inap" class="form-control">
					</div>

					<div class="form-group">
						<label>Total Harga</label>
						<input type="text" name="total_harga" class="form-control">
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