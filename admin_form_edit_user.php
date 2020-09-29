<!DOCTYPE html>
<html>
<head>
	<title>Edit Data User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

  	<?php
		include 'koneksi.php';
		$username = $_GET['username'];
		$query = "select * from user where username='$username'";
		$result = mysqli_query($koneksi,$query);

	while($data = mysqli_fetch_array($result)) {
	?>
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
			<h2><font color="white">Edit Data User</font></h2>
            <form action="admin_proses_edit_user.php?username=<?php echo $data['username'];?>" method="POST">
            	<div class="form-group">
              	<label><font color="white">Username</font></label>
              	<input type="text" class="form-control" placeholder="Username" name="username" 
              	value ="<?php echo $data['username'];?>">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Email</font></label>
              	<input type="email" class="form-control" placeholder="email" name="email"
              	value ="<?php echo $data['email'];?>">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Password</font></label>
              	<input type="password" class="form-control" placeholder="password" name="password"
              	value ="<?php echo $data['password'];?>">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Nama</font></label>
              	<input type="text" class="form-control" placeholder="nama" name="nama"
              	value ="<?php echo $data['nama'];?>">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Nomor</font></label>
              	<input type="text" class="form-control" placeholder="nomor" name="nomor"
              	value ="<?php echo $data['nomor'];?>">
            	</div>
            	<div class="form-group">
              	<label><font color="white">Alamat</font></label>
              	<input type="text" class="form-control" placeholder="alamat" name="alamat"
              	value ="<?php echo $data['alamat'];?>">
            	</div>
            	<?php } ?>
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>

</body>
</html>