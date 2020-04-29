<div class="content-wrapper">
	<section class="content-wrapper">
		        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kamar</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

	</section>

	<section class="content-wrapper">
		<?php echo $this->session->flashdata('message'); ?>

		<button class="btn btn-primary ml-2  mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Kamar</button>

		<a class="btn btn-danger ml-2 mb-2" href="<?php echo base_url('index.php/kamar/cetak')  ?>"> <i class="fa fa-print"></i>Print</a>

		<div class="form-inline mr-auto float-sm-right  navbar-form navbar-right">
			<div class="input-group">
				<?php echo form_open('kamar/search') ?>
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
				<th>Nomor Kamar</th>
				<th>Jenis Kamar</th>
				<th>Harga</th>
				<th colspan="2">Aksi</th>
				
			</tr>

			<?php

			$no=1;
			foreach ($kamar as $kmr) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $kmr->no_kamar ?></td>
					<td><?php echo $kmr->jenis_kamar ?></td>
					<td><?php echo $kmr->harga ?></td>
					<td><?php echo anchor('kamar/detail/'.$kmr->no_kamar,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td onclick="javascript: return confirm('Anda yakin hapus ?')"><?php echo anchor('kamar/hapus/'.$kmr->no_kamar, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('kamar/edit/'.$kmr->no_kamar,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>					
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
				<form method="post" action="<?php echo base_url().'index.php/kamar/tambah_aksi'; ?>">
					
					<div class="form-group">
						<label>Nomor Kamar</label>
						<input type="text" name="no_kamar" class="form-control">
					</div>

					<div class="form-group">
						<label>Jenis Kamar</label>
						<input type="text" name="jenis_kamar" class="form-control">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
					<button type="submit" class="btn btn-primary">Save</button>

				</form>
			</div>
		</div>
	</div>
</div>
</div>