<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "login gagal,username & password salah";
		}
		else if($_GET['pesan']=="logout"){
			echo "Anda berhasil logout";
		}
		else if($_GET['pesan']=="belum_login"){
			echo "Anda harus login";
		}
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
      <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span><font color="white"> Daftar</font></a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Login</font></a></li>
    </ul>
  	</div>
	</nav>

	<div class="container">
		<br><br><br><br><br>
		<center>
		<div class="jumbotron bg-dark">
		<h2><font color="white">Login</font></h2>
		<form action="proses_login.php" method="POST">
		<table>
			<tr>
			<div class="form-group">
        		<td></td>
        		<td><input type="text" class="form-control" placeholder="Username" name="username"></td>
        	</div>
			</tr>
			<tr>
				<td>.</td>
			</tr>
			<tr>
			<div class="form-group">
        		<td></td>
        		<td><input type="password" class="form-control" placeholder="Password" name="password"></td>
        	</div>
			</tr>
		<br>
		</table>
		<br>
		<button type="submit" class="btn btn-primary">Login</button>
		</form>
		<br>
		<a href="daftar.php"><font color="white">Belum punya akun ?</font></a>
		</div>
		</center>
	</div><br><br><br><br><br><br><br>
<footer class="page-footer bg-dark">
  <div class="footer-copyright text-center py-3"><font color="white">© 2019 Copyright Monggo Pinarak</font>
  </div>
</footer>
</body>
</html>