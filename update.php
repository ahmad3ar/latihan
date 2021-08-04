<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul_buku = $_POST['judul_buku'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$penulis = $_POST['penulis'];
 
// update data ke database
mysqli_query($koneksi,"update perpustakaan set judul_buku='$judul_buku', penerbit='$penerbit', tahun_terbit='$tahun_terbit',penulis='$penulis' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>