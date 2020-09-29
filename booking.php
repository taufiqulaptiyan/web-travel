<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
		$username=$_SESSION['username'];
		include 'koneksi.php';
		$query = "select b.id_pesanan,a.nama_wisata,a.deskripsi,a.foto,a.harga from wisata a,booking b where username='$username' and
		a.id_wisata=b.id_wisata";
		$result = mysqli_query($koneksi,$query);
	?>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">  
	<div class="container-fluid">
		<a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo" style="width:80px;"></a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="wisata.php">Tempat Wisata</a></li>
      <li><a href="booking.php">Booking</a></li>
      <li><a href="tentang.php">Tentang Kami</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Logout</font></a></li>
    </ul>
  	</div>
	</nav>

	 <div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Yang Telah Anda Booking</font></h3></center>
		<br>
		<div class="row">
			<?php
				while ($data = mysqli_fetch_array($result)) {
			?>
      	<div class="col-sm-4">
      		<center><h5><font color="white"><b><?php echo $data['nama_wisata']; ?></b></font></h5></center>
      		<div class="thumbnail">
            <img src="images/<?php echo $data['foto']; ?>" class="img-responsive">
          	</div>
           <div class="deskripsi-album"><font color="white">
           	<b>Deskripsi</b><br> <?php echo $data['deskripsi']; ?><br><br>
           	<b>Harga (sudah termasuk tiket masuk + makan siang)</b><br>Rp. <?php echo $data['harga']; ?>,-
          </font></div>
          <a href="proses_hapus.php?id=<?=$data['id_pesanan'];?>" class="btn btn-primary">Hapus</a>
      	</div>
      	
      	<?php
		}
		?>
		</div>
    	</div>
		</div>
<footer class="page-footer bg-dark">
  <div class="footer-copyright text-center py-3"><font color="white">© 2019 Copyright Monggo Pinarak</font>
</div>
</footer>
</body>
</html>