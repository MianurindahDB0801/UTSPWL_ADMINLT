<div class="content-wrapper">
	<section class="content-wrapper">
		<?php foreach ($kamar as $kmr) { ?> 
		<form action="<?php echo base_url().'index.php/kamar/update'; ?>" method='post'>
			
			<div class="form-group">
				<label>No Kamar</label>
				<input type="hidden" name="no" class="form-control" value="<?php echo $kmr->no_kamar ?>">
				<input type="text" name="no_kamar" class="form-control" value="<?php echo $kmr->no_kamar ?>">
			</div>

			<div class="form-group">
				<label>Jenis Kamar</label>
				<input type="text" name="jenis_kamar" class="form-control" value="<?php echo $kmr->jenis_kamar ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $kmr->harga ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			
		<?php } ?>
		
	</section>
</div>