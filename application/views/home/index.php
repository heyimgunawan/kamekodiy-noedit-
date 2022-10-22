<!DOCTYPE html>
<html lang="en">
<head>
<title>Kameko Yogyakarta</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>admin/images/kmkdiy1.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url(); ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/responsive.css">
</head>

<body style="background-color:	#f5f5f5;">

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
				<li class="menu_item"><a href="<?php echo base_url(); ?>News">Event</a></li>
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

	<br><br><br><br>
	
	<!-- Slider -->
	<div class="container">
		<div class="row mt-4">
	  		<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  				<ol class="carousel-indicators">
		   				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  			</ol>
		  				<div class="carousel-inner">
		    				<div class="carousel-item active">
		      					<img class="d-block w-100" src="images/slide/1.jpg" alt="First slide">
		    				</div>
		    				<div class="carousel-item">
		     					<img class="d-block w-100" src="images/slide/2.jpg" alt="Second slide">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="d-block w-100" src="images/slide/3.jpg" alt="Third slide">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="d-block w-100" src="images/slide/4.jpg" alt="Third slide">
		    				</div>
		  				</div>
		  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    			<span class="sr-only">Previous</span>
		  			</a>
		  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    			<span class="sr-only">Next</span>
		  			</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->
	<div class="container mt-4">
	<div class="card">
		<div class="benefit">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h3>Event</h3>
					</div>
				</div><br>
				<marquee>
					<?php foreach ( $berita as $ber) : ?>
						<strong class="text-danger">Event !</strong>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>News/detail/<?= $ber['id_berita']; ?>" style="color: black;"><?= $ber['judul_berita']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php endforeach; ?>
				</marquee>
			</div>
		</div>

		<!-- Banner -->
		<div class="banner">
			<div class="container">
				<div class="row">
					<?php foreach ( $kategori as $kat) : ?>
					<div class="col-md-4">
						<div class="card-deck mt-5">
							<div class="card">
								<a href="<?php echo base_url(); ?>Category/index/<?= $kat['id_kategori']; ?>"><img class="card-img-top" height="250px" src="<?php echo base_url(); ?>admin/kategori/<?= $kat ['gambar']; ?>"></a>
						    	<div class="card-body">
						    		<center><p class="card-text" style="color: black;"><?= $kat ['nama_kategori']; ?></p></center>
						 		</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>			
				</div>
			</div>
		</div>
		<br>
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


