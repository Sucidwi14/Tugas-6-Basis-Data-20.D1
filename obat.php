<!DOCTYPE html>
<html>
<head>
	<title> Menampilkan Data Dari Database PHP </title>
	<style>
		table,tr,td {
			border: 1px solid orange;
		}
		thead {
			background-color: #6495ED: ;
		}
	</style>
</head>
<body>
		<hi style>Clinick_suci</h1>
		<table>
			<thead>
				<tr>
					<td>no</td>
					<td>id_obat</td>
					<td>nama_obat</td>
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($conn, 'SELECT * FROM obat');
			while ($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_obat'] ?></td>
					<td><?php echo $data['nama_obat'] ?></td>
				</tr>
			<?php }?>
	</table>
<body>
