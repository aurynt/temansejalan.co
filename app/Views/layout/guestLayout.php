<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?= $active; ?> &mdash; Temansejalan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
						<div id="fh5co-logo"><a href="index.html">Temansejalan<span>.</span>co</a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="<?= $active=='Home'?'active':''; ?>"><a href="<?= base_url(); ?>">Home</a></li>
							<li class="<?= $active=='Menu'?'active':''; ?>"><a href="<?= base_url('menus'); ?>">Menu</a></li>
							<li class="<?= $active=='Gallery'?'active':''; ?>"><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
							<li class="<?= $active=='About'?'active':''; ?>"><a href="<?= base_url('about'); ?>">About</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?= base_url('assets/'); ?>images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>The Best Coffee <em>&amp;</em> Restaurant <em>in</em> Karanganyar</h1>
							<!-- <h2>Brought to youg by <a href="http://freehtml5.co/" target="_blank">temansejalan.co</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?= $this->renderSection('content');?>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive">
						<img src="<?= base_url('assets/'); ?>images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(<?= base_url('assets/'); ?>images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Book a Table</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
				<p><a href="<?= base_url('reservation'); ?>" class="btn btn-primary btn-outline">Book Now</a></p>
			</div>
		</div>
	</div>
</div>
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Temansejalan.co</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
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
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 Temansecalan.co. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="
						3" target="_blank">Auryncode</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
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
