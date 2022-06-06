<! DOCTYPE html>
<html>
<head>
	<title> Menampilkan data dari database PHP </title>
	<style>
		table,tr,td {
			border: 1px solid orange;
		}
		thead {
			background-color: #6495ED; 
		}
	</style>
</head>
<body>
	<h1 style>Clinick_suci</h1>
<table>
	<thead>
		<tr>
			<td>NO</td>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>NAMA LENGKAP</td>
		</tr>
	</thead>
	<?php
	include "koneksi.php";
	$no = 1;
	$query = mysqli_query($conn, 'SELECT * FROM users');
	while ($data = mysqli_fetch_array($query)) {
?>
<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $data['id'] ?></td>
	<td><?php echo $data['username'] ?></td>
	<td><?php echo $data['password'] ?></td>
	<td><?php echo $data['nama_lengkap'] ?></td>
</tr>
<?php } ?>
</table>
</body>