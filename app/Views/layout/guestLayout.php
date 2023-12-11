<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?= $active; ?> &mdash; Temansejalan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kantin Teman Sejalan" />
	<meta name="keywords" content="temansejalan, kantin, nextlevelkantin, kantin temansejalan" />
	<meta name="author" content="Auryncode" />
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="icon1.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?= base_url('assets/css/flexslider.css'); ?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/'); ?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">TemanSejalan<span>.</span>co</a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="<?= $active == 'Home' ? 'active' : ''; ?>"><a href="<?= base_url(); ?>">Beranda</a></li>
							<li class="<?= $active == 'Menu' ? 'active' : ''; ?>"><a href="<?= base_url('menus'); ?>">Menu</a></li>
							<li class="<?= $active == 'Gallery' ? 'active' : ''; ?>"><a href="<?= base_url('gallery'); ?>">Galeri</a></li>
							<li class="<?= $active == 'About' ? 'active' : ''; ?>"><a href="<?= base_url('about'); ?>">Tentang Kami</a></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- </div> -->
		</nav>

		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?= $setting['image'] !== 'hero_1.jpeg' ? base_url('assets/uploads/') . $setting['image'] : base_url('assets/images/hero_1.jpeg'); ?>" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<h1 class="title-layout">#NEXTLEVELKANTIN</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<?= $this->renderSection('content'); ?>

		<!-- <div id="fh5co-featured-testimony" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 fh5co-heading animate-box">
						<h2>Testimony</h2>
						<p>Our Customers Also Recommend: Read testimonials from satisfied customers about our dishes. Join them and experience the delight of our selected menu."</p>
					</div>
					<div class="col-md-5 animate-box img-to-responsive">
						<img src="<?= base_url('assets/'); ?>images/person_1.jpg" alt="">
					</div>
					<div class="col-md-7 animate-box">
						<blockquote>
							<p> &ldquo; shiittttt GILAAAAA !!!! Baru nemu tempat di karanganyar yang se worth it ini, murah tapi enaksss banget. deket SMA N 1 Karanganyar. jujurly ga boong. ownernya asli ramah banget dan solutif banget sama menu yang ga kita tahu dan nyaraninnya pass banget.. maacih experience nya..🥰🥰 &rdquo;</p>
							<p class="author"><cite>&mdash; Dessy Wulandari</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div> -->
		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h4>TemanSejalan.co</h4>
						<p>Kantin yang Lebih Asik, Harga Ramah Kantong. Teman Sejalan.co: #nextlevelkantin</p>
					</div>
					<div class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Links</h4>
						<ul class="fh5co-footer-links">
							<li><a href="<?= base_url(); ?>">Home</a></li>
							<li><a href="<?= base_url('about'); ?>">About</a></li>
							<li><a href="<?= base_url('menus'); ?>">Menu</a></li>
							<li><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
						</ul>
					</div>

					<div class="col-md-6 col-md-push-1 fh5co-widget">
						<h4></h4>
						<ul class="fh5co-footer-links">
							<li>Jl.Citarum, Manggeh, Tegalgede, Kec. Karanganyar <br> Kabupaten Karanganyar, Jawa Tengah 57714</li>
							<li><a target="_blank" href="https://wa.me/<?= $setting['whatsapp']; ?>?text=hallo ka barra.. saya mau nanya nanya boleh ngga nih"><?= $setting['whatsapp']; ?></a></li>
							<li><a href="mailto:<?= $setting['email']; ?>"><?= $setting['email']; ?></a></li>
						</ul>
					</div>

				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2023 Temansecalan.co. All Rights Reserved.</small>
							<small class="block">Designed by <a href="https://auryncode.vercel.app/" target="_blank">Auryncode</a></small>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a target="_blank" href="https://instagram.com/<?= $setting['instagram']; ?>"><i class="icon-instagram"></i></a></li>
							<li><a target="_blank" href="https://facebook.com/<?= $setting['facebook']; ?>"><i class="icon-facebook2"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/'); ?>js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?= base_url('assets/'); ?>js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>