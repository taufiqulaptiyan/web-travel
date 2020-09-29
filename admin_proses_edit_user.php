<?php
	include 'koneksi.php';
	$username=$_GET['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$alamat = $_POST['alamat'];


	$query=mysqli_query($koneksi,"update user set email='$email',password='$password',nama='$nama',nomor='$nomor',alamat='$alamat' where username ='$username'");
	header('Location: admin_user.php');
?>