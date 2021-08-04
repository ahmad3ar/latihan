<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$penulis = $_POST['penulis'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into perpustakaan values('','$judul_buku','$penerbit','$tahun_terbit','$penulis')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>