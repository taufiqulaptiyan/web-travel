<!DOCTYPE html>
<html>
<head>
	<title>Daftar Booking</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
</head>
<body>
	<?php
    session_start();
    if(empty($_SESSION['username'])){
      header("location:login.php?pesan=belum_login");
    }
    include 'koneksi.php';
		$query = "select b.id_pesanan,b.username,a.nama_wisata,a.harga from booking b,wisata a where b.id_wisata=a.id_wisata order by b.id_pesanan asc";
		$result = mysqli_query($koneksi,$query);
  	?>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">  
	<div class="container-fluid">
		<a class="navbar-brand" href="admin_home.php"><img src="images/logo.png" alt="logo" style="width:80px;"></a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin_wisata.php">Tempat Wisata</a></li>
      <li><a href="admin_user.php">Daftar User</a></li>
      <li><a href="admin_booking.php">Daftar Booking</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Logout</font></a></li>
    </ul>
  	</div>
	</nav>

	<div class="container">
		<center><h2>Data Booking</font></h2></center>
		<br>
		<table class="table table-striped">
			<tr>
				<th>ID Pesanan</th>
				<th>Username</th>
				<th>Tempat Wisata</th>
				<th>Harga</th>
				<th></th>
			</tr>
			<?php
				while ($data = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $data['id_pesanan']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['nama_wisata']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td>
				<a href="admin_proses_hapus_booking.php?id=<?php echo $data['id_pesanan'] ?>" class="btn btn-danger">Hapus</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>