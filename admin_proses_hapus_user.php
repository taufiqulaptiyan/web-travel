<?php
include 'koneksi.php';
$username = $_GET['username'];
$query = "delete from user where username = '$username'";
$result = mysqli_query($koneksi, $query);
header('Location: admin_user.php')
?>