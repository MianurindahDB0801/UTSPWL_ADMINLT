<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<th>No</th>
			<th>No Transaksi</th>
			<th>ID Pengunjung</th>
			<th>ID Karyawan</th>
			<th>Tanggal Masuk</th>
			<th>Tanggal Keluar</th>
			<th>Nomor Kamarr</th>
			<th>Lama Inap</th>
			<th>Total Harga</th>
		</tr>

		<?php
		$no=1;
		foreach ($transaksi as $tran): ?>

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

		</tr>
	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>