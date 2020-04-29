<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Karyawan</th>
			<th>Nama Karyawan</th>
			<th>Jenis Kelamin</th>
		</tr>

		<?php
		$no=1;
		foreach ($karyawan as $krw): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $krw->id_karyawan ?></td>
			<td><?php echo $krw->nama_karyawan ?></td>
			<td><?php echo $krw->jenis_kelamin ?></td>

		</tr>
	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>