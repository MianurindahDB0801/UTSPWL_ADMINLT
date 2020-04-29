<div class="content-wrapper">
	<section class="content-wrapper">
		<?php foreach ($transaksi as $tran) { ?> 
		<form action="<?php echo base_url().'index.php/transaksi/update'; ?>" method='post'>
			
			<div class="form-group">
				<label>No Transaksi</label>
				<input type="hidden" name="no" class="form-control" value="<?php echo $tran->no_transaksi ?>">
				<input type="text" name="no_transaksi" class="form-control" value="<?php echo $tran->no_transaksi ?>">
			</div>

			<div class="form-group">
				<label>ID Pengunjung</label>
				<input type="text" name="id_pengunjung" class="form-control" value="<?php echo $tran->id_pengunjung ?>">
			</div>

			<div class="form-group">
				<label>ID Karyawan</label>
				<input type="text" name="id_karyawan" class="form-control" value="<?php echo $tran->id_karyawan ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Masuk</label>
				<input type="text" name="tgl_masuk" class="form-control" value="<?php echo $tran->tgl_masuk ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Keluar</label>
				<input type="text" name="tgl_keluar" class="form-control" value="<?php echo $tran->tgl_keluar ?>">
			</div>

			<div class="form-group">
				<label>Nomor Kamar</label>
				<input type="text" name="no_kamar" class="form-control" value="<?php echo $tran->no_kamar ?>">
			</div>

			<div class="form-group">
				<label>Lama Inap</label>
				<input type="text" name="lama_inap" class="form-control" value="<?php echo $tran->lama_inap ?>">
			</div>

			<div class="form-group">
				<label>Total Harga</label>
				<input type="text" name="total_harga" class="form-control" value="<?php echo $tran->total_harga ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			
		<?php } ?>
		
	</section>
</div>