<?php
	include "koneksi.php";
	$nama_wisata = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_POST['foto'];
	$harga = $_POST['harga'];

	$query = "insert into wisata values ('','$nama_wisata','$deskripsi','$foto','$harga')";
	$result = mysqli_query($koneksi,$query);
	header('Location: admin_wisata.php')
?>