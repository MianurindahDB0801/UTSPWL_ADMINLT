<div class="content-wrapper">
	<section class="content-wrapper">
		<?php foreach ($pengunjung as $peng) { ?> 
		<form action="<?php echo base_url().'index.php/pengunjung/update'; ?>" method='post'>
			
			<div class="form-group">
				<label>ID Pengunjung</label>
				<input type="hidden" name="no" class="form-control" value="<?php echo $peng->id_pengunjung ?>">
				<input type="text" name="id_pengunjung" class="form-control" value="<?php echo $peng->id_pengunjung ?>">
			</div>

			<div class="form-group">
				<label>Nama Pengunjung</label>
				<input type="text" name="nama_pengunjung" class="form-control" value="<?php echo $peng->nama_pengunjung ?>">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $peng->alamat ?>">
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $peng->jenis_kelamin ?>">
			</div>

			<div class="form-group">
				<label>Nomor Telepon</label>
				<input type="text" name="no_tlp" class="form-control" value="<?php echo $peng->no_tlp ?>">
			</div>

			<div class="form-group">
				<label>Nomor KTP</label>
				<input type="text" name="no_ktp" class="form-control" value="<?php echo $peng->no_ktp ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			
		<?php } ?>
		
	</section>
</div>