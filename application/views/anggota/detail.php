<!DOCTYPE html>
<html lang="en">
<head>
<title>Profil - Kameko Yogyakarta</title>
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

<body style="background-color:	#000000;">

<div class="super_container">

	<!-- Header -->
	<header class="header trans_300">
		<!-- Main Navigation -->
		<div class="main_nav_container" style="background-color: #F7DAEF;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="<?php echo base_url(); ?>Home"><img height="80px" src="<?php echo base_url(); ?>images/logo/kmkdiy.png"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="<?php echo base_url(); ?>News">Event</a></li>
								<li><a href="<?php echo base_url(); ?>Member">Member</a></li>
								<li><a href="<?php echo base_url(); ?>Gallery">Gallery</a></li>
								<li><a href="<?php echo base_url(); ?>About">About</a></li>
								<?php
								if($this->session->userdata('status') == true){
								echo '<li class="nav-item dropdown">
								    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
								    <div class="dropdown-menu">
								      <a class="dropdown-item" href="'.base_url().'Profil">Profil</a>
								      <a class="dropdown-item" href="'.base_url().'Creation">My Work</a>
								      <a class="dropdown-item" href="'.base_url().'Login/logout">Logout</a>
								    </div>
								</li>';
								} else {
								echo '<li><a href="'.base_url().'Login">Login</a></li>';
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
								<a class="dropdown-item" href="'.base_url().'Profil">Profil</a>
								<a class="dropdown-item" href="'.base_url().'Creation">My Work</a>
								<a class="dropdown-item" href="'.base_url().'Login/logout">Logout</a>
								</div>
							  </li>';
					} else {
						echo '<li class="menu_item"><a href="'.base_url().'Login">Login</a></li>';
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
					<br>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->
	<div class="banner">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Home">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Home">Member</a></li>
			    	<li class="breadcrumb-item active" aria-current="page"><?= $anggota['nama_anggota']; ?></li>
				</ol>
			</nav> 
			<div class="card col-lg-10 offset-md-1">
			<div class="col text-center">
					<h3 class="mt-3">Profil</h3>
			</div><br>
			<div class="row mt-5 ml-3">
			<div class="col-lg-10 offset-md-1">
				<div class="container">
                        <center><img class="" style="width:275px; height:300px;" alt="" src="<?php echo base_url(); ?>anggota/<?= $anggota ['gambar']; ?>"></center>
                        <h4 class="text-center"><?= $anggota['nama_anggota']; ?></h4>
                    </div>
                <div class="container">
					<?php
					$phone= $anggota['no_telp'];
					$jumlah_sensor=8;
					$setelah_angka_ke=4;

					//ambil 4 angka di tengah yan akan disensor
					$censored = mb_substr($phone, $setelah_angka_ke, $jumlah_sensor);

					//pecah kelompok angka pertama dan terakhir
					$phone2=explode($censored,$phone);

					//gabung angka pertama dan terakhir dengan angka tengah yang telah di sensor
					$phone_new=$phone2[0]."-XXXX-"."XXXX";
					?>
				<ul class="list-group list-group-flush">
                     <li class="list-group-item">
                          No Telepon <span class="pull-right"> <?php echo $phone_new; ?></span>
                    </li>
                </ul><br>
				</div>
			</div>
		</div><br>
	</div>
	</div>
</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-12">
				<hr>
					<div class="footer_nav_container">	
						<center>
							<a href="https://www.facebook.com/kamekoDIY" target="_blank">
								<img src="<?php echo base_url(); ?>images/footer/fb3.png" height="40px" style="margin: 10px">
							</a>
							<a href="https://www.instagram.com/kamekodiy/" target="_blank">
								<img src="<?php echo base_url(); ?>images/footer/ig3.png" height="40px" style="margin: 10px">
							</a>
							<div class="cr">©2021 All Rights Reserverd. Kameko Yogyakarta
							</div>
						</center>
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
