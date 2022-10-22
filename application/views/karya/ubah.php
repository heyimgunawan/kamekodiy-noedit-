<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit My Work - Kameko Yogyakarta</title>
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
			<div class="col-md-6 offset-md-3">
				<div class="card-deck mt-5">
					<div class="card">
					  	<div class="card-body">
					    <form action="<?php echo base_url(); ?>Creation/ubah" method="post" enctype="multipart/form-data">
					    	<input type="hidden" name="id_karya" value="<?= $karya['id_karya'];?>">
                    		<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'];?>">
                    		<div class="form-group">
                 			   <img class="align-self-center" style="width:300px; height:350px;" alt="" src="<?php echo base_url(); ?>hasil_karya/<?= $karya ['foto_karya']; ?>">
                            </div>
							<center>
								<input type="hidden" name="foto_karya" value="<?= $karya['foto_karya'];?>">
							</center>
					       	<div class="form-group">
					       		<label for="exampleFormControlFile1"><strong>Work</strong></label>
						    	<input type="file" class="form-control" name="foto_karya" id="foto_karya">
						  	</div>
						  	<div class="form-group">
					       		<label for="exampleFormControlFile1"><strong>Title</strong></label>
								<input type="text" class="form-control" name="nama_karya" id="nama_karya" value="<?= $karya['nama_karya'];?>">
					  		</div>
							<div class="form-group">
						  		<label for="exampleFormControlFile1"><strong>Category</strong></label>
						    	<select class="form-control" id="id_kategori" name="id_kategori">
                            		<option selected value="<?= $karya['id_kategori'];?>"><?= $karya['nama_kategori'];?></option>
                                    <?php foreach ($kategori as $kat) : ?>
                                    	<option value="<?= $kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?>
                                        </option>
                                        <?php endforeach; ?>
                            	</select>
							</div>
							<div class="row">
                        	<div class="col-md-6 offset-md-3">
                            	<a href="<?php echo base_url(); ?>Creation" class="btn col-md-4 btn-success btn-sm float-left" style="background-color: #B22222;">Cancel</a>
                            	<button type="submit" name="simpan" class="btn col-md-4 btn-success btn-sm float-right">Save</button>
                        	</div>
                    	</div>
						</form>
					</div>
				</div>
			</div>
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
