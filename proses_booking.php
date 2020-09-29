<?php
include "koneksi.php";
$id_wisata=$_GET['id'];
$username=$_GET['username'];

$query = "insert into booking values ('','$username','$id_wisata')";
$result = mysqli_query($koneksi,$query);
header('Location: booking.php')
?>