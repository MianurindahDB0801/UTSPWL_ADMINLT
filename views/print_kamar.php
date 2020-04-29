<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nomor Kamar</th>
			<th>Jenis Kamar</th>
			<th>Harga</th>
		</tr>

		<?php
		$no=1;
		foreach ($kamar as $kmr): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $kmr->no_kamar ?></td>
			<td><?php echo $kmr->jenis_kamar ?></td>
			<td><?php echo $kmr->harga ?></td>

		</tr>
	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>