<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "delete from booking where id_pesanan = '$id'";
$result = mysqli_query($koneksi, $query);
header('Location: admin_booking.php')
?>