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
					<td>id_dokter</td>
					<td>nama_dokter</td>
				</tr>
			<thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($conn, 'SELECT * FROM pasien');
			while ($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_pasien'] ?></td>
					<td><?php echo $data['nama_pasien'] ?></td>
				</tr>
			<?php }?>
	</table>
<body>