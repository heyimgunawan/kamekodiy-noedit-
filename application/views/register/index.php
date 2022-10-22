<!DOCTYPE html>
<html lang="en">
<head>
<title>Register - Kameko Yogyakarta</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url(); ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/responsive.css">
</head>

<body style="background-color:	#F5F5F5;">

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="<?php echo base_url(); ?>Home"><img height="80px" src="images/kameko.DIY.png"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="<?php echo base_url(); ?>News">News</a></li>
								<li><a href="<?php echo base_url(); ?>Member">Member</a></li>
								<li><a href="<?php echo base_url(); ?>Gallery">Gallery</a></li>
								<li><a href="<?php echo base_url(); ?>About">About</a></li>
								<?php 
								if($this->session->userdata('status') == true){
								echo '<li class="nav-item dropdown">
								    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="Profil">Profil</a>
								      <a class="dropdown-item" href="Creation">Creation</a>
								      <a class="dropdown-item" href="Login/logout">Logout</a>
								    </div>
								</li>';
								} else {
								echo '<li><a href="Login">Login</a></li>';
							}
							?>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item"><a href="<?php echo base_url(); ?>News">News</a></li>
				<li class="menu_item"><a href="<?php echo base_url(); ?>Member">Member</a></li>
				<li class="menu_item"><a href="<?php echo base_url(); ?>Gallery">Gallery</a></li>
				<li class="menu_item"><a href="<?php echo base_url(); ?>About">About</a></li>
				<?php 
					if($this->session->userdata('status') == true){
						echo '<li class="menu_item nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
								<div class="dropdown-menu">
								<a class="dropdown-item" href="Profil">Profil</a>
								<a class="dropdown-item" href="Creation">Creation</a>
								<a class="dropdown-item" href="Login/logout">Logout</a>
								</div>
							  </li>';
					} else {
						echo '<li class="menu_item"><a href="Login">Login</a></li>';
					}
				?>
			</ul>
		</div>
	</div>
	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<br><br><br>
					<img class="card-img-top" src="<?php echo base_url(); ?>images/kameko.DIY.png">
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="col-md-6 offset-md-3">
				<div class="card-deck mt-5">
					  <div class="card">
					  	<div class="card-body">
					    <form action="<?php echo base_url(); ?>Register/tambah" method="post" enctype="multipart/form-data">
					    	<input type="hidden"class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?php echo date('Y-m-d'); ?>">
					       <div class="form-group">
					       	<label for="exampleFormControlFile1"><strong>Foto Profil</strong></label>
						      <input type="file" class="form-control" name="gambar" id="gambar">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp">
						  </div>
						  <center>
						  <button type="submit" class="btn col-sm-3 btn-primary btn-sm">Daftar</button>
						  <br><br>
						  <a href="<?php echo base_url(); ?>Home" class="btn col-sm-3 btn-primary btn-sm">Kembali</a>
						  </center>
						</form>
					</div>
					  </div>
					</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-12">
					<hr>
					<div class="footer_nav_container">
						<center><a href=""><i class="fa fa-instagram fa-2x"></i></a>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-facebook fa-2x"></i></a></center>
						<center><div class="cr">©2019 All Rights Reserverd. Kameko Yogyakarta</div></center>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url(); ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>plugins/easing/easing.js"></script>
<script src="<?php echo base_url(); ?>js/custom.js"></script>
</body>

</html>
