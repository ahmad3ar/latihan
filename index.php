<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
<h2>DATABASE Buku</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1">
	<tr>
		<th>no</th>
		<th>judul Buku</th>
		<th>pernebit</th>
		<th>tahun terbit</th>
		<th>penulis</th>
	 </tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi,"select * from perpustakaan");
	while ($d = mysqli_fetch_array($data)) {
		?>
	<tr>
		        <td><?php echo $no++; ?></td>
				<td><?php echo $d['judul_buku']; ?></td>
				<td><?php echo $d['penerbit']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td><?php echo $d['penulis']; ?></td>
			<td>
		<a href="edit.php?id=<?php echo $d['id'];?>">edit</a>
		<a href="hapus.php?id=<?php echo $d['id'];?>">hapus</a>
	</td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>
