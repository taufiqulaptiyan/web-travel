<?php 
	include "koneksi.php";
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$alamat = $_POST['alamat'];

	$query = "insert into user values ('$username','$email','$password','$nama','$nomor','$alamat')";
	$result = mysqli_query($koneksi,$query);
	header('Location: login.php')
?>