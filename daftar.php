<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
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
        <br>
        <div class="jumbotron bg-dark">
          <h2><font color="white">Registrasi</font></h2>
            <form action="proses_daftar.php" method="POST">

            <div class="form-group">
              <label><font color="white">Username</font></label>
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <label><font color="white">Email</font></label>
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <label><font color="white">Password</font></label>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group">
              <label><font color="white">Nama</font></label>
              <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="form-group">
              <label><font color="white">No Telepon</font></label>
              <input type="text" class="form-control" placeholder="Nomor Telepon" name="nomor">
            </div>
            <div class="form-group">
            <label><font color="white">Alamat</font></label>
            <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        </div>
<footer class="page-footer bg-dark">
  <div class="footer-copyright text-center py-3"><font color="white">© 2019 Copyright Monggo Pinarak</font>
  </div>
</footer>
</body>
</html>