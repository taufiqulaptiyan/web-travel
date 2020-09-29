<!DOCTYPE html>
<html>
<head>
	<title>Olah Data Wisata</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
    session_start();
    if(empty($_SESSION['username'])){
      header("location:login.php?pesan=belum_login");
    }
  	?>
  	<?php
		include 'koneksi.php';
		$query = "select * from wisata";
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

	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Daerah Istimewa Yogyakarta</font></h3>
			<a href="admin_form_tambah_wisata.php" class="btn btn-primary">Tambah Tempat Wisata</a></center>
		<br>
		<div class="row">
			<?php
				while ($data = mysqli_fetch_array($result)) {
			?>
      	<div class="col-sm-4"><br>
      		<center><h5><font color="white"><b><?php echo $data['nama_wisata']; ?></b></font></h5></center>
      		<div class="thumbnail">
            <img src="images/<?php echo $data['foto']; ?>" class="img-responsive">
          	</div>
           <div class="deskripsi-album"><font color="white">
           	<b>Deskripsi</b><br> <?php echo $data['deskripsi']; ?><br><br>
           	<b>Harga (sudah termasuk tiket masuk + makan siang)</b><br>Rp. <?php echo $data['harga']; ?>,-
          </font></div>
          <a href="admin_form_edit_wisata.php?id=<?php echo $data['id_wisata'];?>" class="btn btn-primary">Edit</a>
          <a href="admin_proses_hapus_wisata.php?id=<?php echo $data['id_wisata'];?>" class="btn btn-danger">Hapus</a>
          
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