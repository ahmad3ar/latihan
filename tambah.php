<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA PERPUSTAKAAN - WWW.MALASNGODING.COM</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA PERPUSTAKAAN</h3>
<form method="post" action="tambah_aksi.php">
	<table>
		<tr>
			<td>judul buku</td>
			<td><input type="text" name="judul_buku"></td>
		</tr>
		<tr>
			<td>penerbit</td>
			<td><input type="text" name="penerbit"></td>
		</tr>
		<tr>
				<td>tahun terbit</td>
				<td><input type="text" name="tahun_terbit"></td>
			</tr>
			<tr>
				<td>penulis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
	</table>
</form>
</body>
</html>