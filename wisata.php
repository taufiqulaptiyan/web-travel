<!DOCTYPE html>
<html>
<head>
	<title>Tempat Wisata</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include 'koneksi.php';
		$query = "select * from wisata";
		$result = mysqli_query($koneksi,$query);
	?>
  <?php
    session_start();
    if(empty($_SESSION['username'])){
      header("location:login.php?pesan=belum_login");
    }
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
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Logout</font></a></li>
    </ul>
  	</div>
	</nav>

        <br>
        <div class="jumbotron bg-dark">
        <center>
          <h2><font color="white">Selamat Datang,<?=$_SESSION['username']?> </font></h2>
          <h4><font color="white">Silahkan pilih destinasi wisata anda</font></h4>
      	</center>
        </div>


    <div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Daerah Istimewa Yogyakarta</font></h3></center>
		<br>
		<div class="row"><br>
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
          <a href="proses_booking.php?id=<?php echo $data['id_wisata'];?>&username=<?= $_SESSION['username'];?>" class="btn btn-primary">Pesan</a>
      	</div>
      	
      	<?php
		}
		?>
		</div>
    	</div>
		</div>
	</div>
<footer class="page-footer bg-dark">
  <div class="footer-copyright text-center py-3"><font color="white">© 2019 Copyright Monggo Pinarak</font>
</div>
</footer>
</body>
</html>