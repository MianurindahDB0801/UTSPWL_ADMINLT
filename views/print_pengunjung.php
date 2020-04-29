<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Pengunjung</th>
			<th>Nama Pengunjung</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Nomor Telepon</th>
			<th>Nomor KTP</th>
		</tr>

		<?php
		$no=1;
		foreach ($pengunjung as $peng): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $peng->id_pengunjung ?></td>
			<td><?php echo $peng->nama_pengunjung ?></td>
			<td><?php echo $peng->alamat ?></td>
			<td><?php echo $peng->jenis_kelamin ?></td>
			<td><?php echo $peng->no_tlp ?></td>
			<td><?php echo $peng->no_ktp ?></td>

		</tr>
	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>