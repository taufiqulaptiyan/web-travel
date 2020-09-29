<?php
include "koneksi.php";
$id = $_GET['id'];
$query        = "delete from booking where id_pesanan like $id";
$hasil_mysql  = mysqli_query($koneksi, $query);
header('Location: booking.php')
?>