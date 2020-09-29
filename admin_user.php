<!DOCTYPE html>
<html>
<head>
	<title>Daftar User</title>
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
		$query = "select * from user";
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
		<center><h2>Data User</font></h2></center>
		<br>
		<table class="table table-striped">
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Nomor</th>
				<th>Alamat</th>
				<th></th>
			</tr>
			<?php
				while ($data = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['password']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['nomor']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><a href="admin_form_edit_user.php?username=<?php echo $data['username'] ?>" class="btn btn-success">Edit</a>
					<a href="admin_proses_hapus_user.php?username=<?php echo $data['username'] ?>" class="btn btn-danger">Hapus</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>