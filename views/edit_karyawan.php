<div class="content-wrapper">
	<section class="content-wrapper">
		<?php foreach ($karyawan as $krw) { ?> 
		<form action="<?php echo base_url().'index.php/karyawan/update'; ?>" method='post'>
			
			<div class="form-group">
				<label>ID Karyawan</label>
				<input type="hidden" name="no" class="form-control" value="<?php echo $krw->id_karyawan ?>">
				<input type="text" name="id_karyawan" class="form-control" value="<?php echo $krw->id_karyawan ?>">
			</div>

			<div class="form-group">
				<label>Nama Karyawan</label>
				<input type="text" name="nama_karyawan" class="form-control" value="<?php echo $krw->nama_karyawan ?>">
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $krw->jenis_kelamin ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			
		<?php } ?>
		
	</section>
</div>