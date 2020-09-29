<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "delete from wisata where id_wisata = $id";
$result = mysqli_query($koneksi, $query);
header('Location: admin_wisata.php')
?>