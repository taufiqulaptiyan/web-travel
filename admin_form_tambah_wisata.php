<!DOCTYPE html>
<html>
<head>
	<title>Tambah Tempat Wisata</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">  
	<div class="container-fluid">
		<a class="navbar-brand" href="admin_home.php"><img src="images/logo.png" alt="logo" style="width:80px;"></a>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin_wisata.php">Tempat Wisata</a></li>
      <li><a href="admin_user.php">Daftar User</a></li>
      <li><a href="admin_booking">Daftar Booking</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font color="white"> Logout</font></a></li>
    </ul>
  	</div>
	</nav>

	<div class="container">
		<div class="jumbotron bg-dark">
			<h2><font color="white">Tambah Tempat Wisata</font></h2>
            <form action="admin_proses_tambah_wisata.php" method="POST">
            	<div class="form-group">
              	<label><font color="white">Nama Tempat Wisata</font></label>
              	<input type="text" class="form-control" placeholder="Nama Tempat Wisata" name="nama_wisata">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Deskripsi</font></label>
              	<textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
            	</div>
            	<div class="form-group">
              	<label><font color="white">Nama File Foto</font></label>
              	<input type="text" class="form-control" placeholder="Nama Foto (.jpg / .png)" name="foto">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Harga</font></label>
              	<input type="text" class="form-control" placeholder="Harga" name="harga">
            	</div>
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</body>
</html>