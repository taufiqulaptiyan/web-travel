<?php
	include 'koneksi.php';
	$id=$_GET['id'];
	$nama_wisata = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_POST['foto'];
	$harga = $_POST['harga'];

	$query=mysqli_query($koneksi,"update wisata set nama_wisata='$nama_wisata',deskripsi='$deskripsi',foto='$foto',harga='$harga' where id_wisata ='$id'");
	header('Location: admin_wisata.php');
?>