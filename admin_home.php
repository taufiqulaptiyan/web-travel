<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

	<center><br><br><br><br><br><br>
		<div class="container">
		<div class="jumbotron bg-dark">
			<h2><font color="white">Selamat Datang Admin</font></h2><br><br>
			<a href="admin_wisata.php" class="btn btn-primary">Olah Data Tempat Wisata</a>
			<a href="admin_user.php" class="btn btn-primary">Olah Data User</a>
			<a href="admin_booking.php" class="btn btn-primary">Olah Data Booking</a>
		</div>
		</div>
		</center>
</body>
</html>