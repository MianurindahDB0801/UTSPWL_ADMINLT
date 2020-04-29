<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA TRANSAKSI</strong></h4>

		<table class="table">
			<tr>
				<th>No Transaksi</th>
				<td><?php echo $detail->no_transaksi ?></td>
			</tr>
			<tr>
				<th>ID Pengunjung</th>
				<td><?php echo $detail->id_pengunjung ?></td>
			</tr>
			<tr>
				<th>ID Karyawan</th>
				<td><?php echo $detail->id_karyawan ?></td>
			</tr>
			<tr>
				<th>Tanggal Masuk</th>
				<td><?php echo $detail->tgl_masuk ?></td>
			</tr>
			<tr>
				<th>Tanggal Keluar</th>
				<td><?php echo $detail->tgl_keluar ?></td>
			</tr>
			<tr>
				<th>Nomor Kamar</th>
				<td><?php echo $detail->no_kamar ?></td>
			</tr>
			<tr>
				<th>Lama Inap</th>
				<td><?php echo $detail->lama_inap ?></td>
			</tr>
			<tr>
				<th>Total Harga</th>
				<td><?php echo $detail->total_harga ?></td>
			</tr>
		</table>
	</section>
	
</div>