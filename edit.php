<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h2>EDIT DATA PERPUSTAKAAN - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PERPPUSTAKAN</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from perpustakaan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>judul buku</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="judul_buku" value="<?php echo $d['judul_buku']; ?>">
					</td>
				</tr>
				<tr>
					<td>penerbit</td>
					<td><input type="text" name="penerbit" value="<?php echo $d['penerbit']; ?>"></td>
				</tr>
				<tr>
					<td>tahun terbit</td>
					<td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>"></td>
				</tr>
				<tr>
					<td>penulis</td>
					<td><input type="text" name="penulis" value="<?php echo $d['penulis']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>