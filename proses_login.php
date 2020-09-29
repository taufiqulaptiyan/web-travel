<?php
	session_start();
	include 'koneksi.php';

	$username=$_POST['username'];
	$password=$_POST['password'];

	$query=mysqli_query($koneksi,"select * from user where username='$username' and password='$password'")or die
	(mysqli_error($koneksi));

	$cek=mysqli_num_rows($query);
	if($cek>0){
		$_SESSION['username']=$username;
		$_SESSION['status']="login";
		header("location:wisata.php");
	}
	else if (($username=='admin')&&($password=='admin')) {
		$_SESSION['username']="admin";
		$_SESSION['status']="login";
		header("location:admin_home.php");
	}
	else{
		header("location:login.php?pesan=gagal");
	}
?>