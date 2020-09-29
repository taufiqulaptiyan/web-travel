<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

<div class="container">
		<center><br>
		<div class="jumbotron bg-dark">
			<h2><font color="white">Selamat Datang di Monggo Pinarak Tour</font></h2>
		</div>
		</center><hr>
	
	<div class="jumbotron bg-dark">
	<div id="slider">
	<div id="slide-holder">
	  	<div class="slide"><img src="images/tugujogja3.1.jpg"></div>
	    <div class="slide"><img src="images/sermo_jpg.jpg"></div>
	    <div class="slide"><img src="images/timang.jpg"></div>
	    <div class="slide"><img src="images/kalibiru.jpg"></div>
	</div>
	</div>
	</div><br><hr>
</div>
	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Kabupaten Sleman</font></h3></center>
		<br>
		<div class="row">

      	<div class="col-sm-4">
      		<center><h5><font color="white">Museum Gunung Merapi</font></h5></center>
      		<div class="thumbnail">
            <img src="images/museum_merapi.jpg" class="img-responsive">
          </div>
           <div class="deskripsi-album"><font color="white">
           	Alamat : Jl. Kaliurang No.Km, Banteng, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Sindu Kusuma Edupark</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/sindu.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Jl. Jambon Jl. Kragilan, Kragilan, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta
          </font></div>
      		</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Bunker Kaliadem</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/bunker.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Kinarejo, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>
    	</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Kabupaten Kulon Progo</font></h3></center>
		<br>
		<div class="row">

      	<div class="col-sm-4">
      		<center><h5><font color="white">Waduk Sermo</font></h5></center>
      		<div class="thumbnail">
            <img src="images/sermo_jpg.jpg" class="img-responsive">
          </div>
           <div class="deskripsi-album"><font color="white">
           	Alamat : Sremo Lor, Hargowilis, Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Kalibiru</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/kalibiru.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Hargowilis, Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta
          </font></div>
      		</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Air Terjun Kedung Pedut</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/kedung.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Banyunganti, Jatimulyo, Girimulyo, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>
    	</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Kabupaten Bantul</font></h3></center>
		<br>
		<div class="row">

      	<div class="col-sm-4">
      		<center><h5><font color="white">Kebun Buah Mangunan</font></h5></center>
      		<div class="thumbnail">
            <img src="images/mangunan.jpg" class="img-responsive">
          </div>
           <div class="deskripsi-album"><font color="white">
           	Alamat :  Mangunan, Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Pinus Pengger</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/pengger.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Jl. Dlingo-Patuk, Pantirejo, Terong, Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta
          </font></div>
      		</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Pantai Parangtritis</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/parangtritis.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Parangtritis, Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>
    	</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Kabupaten Gunung Kidul</font></h3></center>
		<br>
		<div class="row">

      	<div class="col-sm-4">
      		<center><h5><font color="white">Goa Pindul</font></h5></center>
      		<div class="thumbnail">
            <img src="images/pindul.jpg" class="img-responsive">
          </div>
           <div class="deskripsi-album"><font color="white">
           	Alamat : Gelaran II, RT.3/16, Gunungbang, Bejiharjo, Karangmojo, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Gunung Api Purba Nglanggeran</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/nglanggeran.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Nglanggeran Wetan, Nglanggeran, Patuk, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta
          </font></div>
      		</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Pantai Timang</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/timang.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Jl. Pantai Sel. Jawa, Pantai, Purwodadi, Tepus, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta
          </font></div>
      	</div>
    	</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="jumbotron bg-dark">
		<center><h3><font color="white">Tempat Wisata Populer Di Kota Yogyakarta</font></h3></center>
		<br>
		<div class="row">

      	<div class="col-sm-4">
      		<center><h5><font color="white">Tugu Jogja</font></h5></center>
      		<div class="thumbnail">
            <img src="images/tugujogja3.jpg" class="img-responsive">
          </div>
           <div class="deskripsi-album"><font color="white">
           	Alamat : Perempatan Jl. Jenderal Sudirman dan Jl. Margo Utomo
          </font></div>
      	</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Keraton Kesultanan Yogyakarta</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/keraton.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Jl. Rotowijayan Blok 1, Panembahan, Keraton, Kota Yogyakarta
          </font></div>
      		</div>

      	<div class="col-sm-4">
      	<center><h5><font color="white">Jalan Malioboro</font></h5></center>
      	  	<div class="thumbnail">
          	<img src="images/malioboro.jpg" class="img-responsive">
          	</div>
           	<div class="deskripsi-album"><font color="white">
         	Alamat : Jl. Malioboro, Kota Yogyakarta
          </font></div>
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