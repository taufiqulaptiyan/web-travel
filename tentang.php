<!DOCTYPE html>
<html>
<head>
	<title>Tentang Kami</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">  
	<div class="container-fluid">
		<a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo" style="width:80px;"></a>
    <ul class="nav navbar-nav">
      <li ><a href="wisata.php">Tempat Wisata</a></li>
      <li><a href="booking.php">Booking</a></li>
      <li class="active"><a href="tentang.php">Tentang Kami</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<?php
      session_start();
    	if(empty($_SESSION['username'])){?>
    	   <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span><font color="white"> Daftar</font></a></li>
      	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Login</font></a></li>
      	
      <?php } 
      else {?>
  		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Logout</font></a></li>
      <?php }?>

    </ul>
  	</div>
	</nav>

	<div class="container"><br><br><br><br><br><br>
		<div class="jumbotron bg-dark">
			<h2><font color="white">Tentang Kami</h2></font>
			<h5><font color="white">Monggo pinarak adalah perusahaan yang bergerak di bidang tour untuk wilayah pariwisata di provinsi Daerah Istimewa Yogyakarta yang memiliki motto "Amanah,Terpercaya dan Insya Allah Nyaman dan Aman".<br><br>
			Alamat : Jl. Pembangunan No. 04 Yogyakarta</font></h5>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="page-footer bg-dark">
  <div class="footer-copyright text-center py-3"><font color="white">© 2019 Copyright Monggo Pinarak</font>
  </div>
</footer>
</body>
</html>