<?= $this->extend('layout/guestLayout'); ?>

<?= $this->section('content'); ?>
<div id="fh5co-about" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
				<div style="width: 800px;height: 450px;overflow: hidden;position: relative;">
					<img class="img-custom" src="<?= $setting['image'] !== 'hero_1.jpeg' ? base_url('assets/uploads/') . $setting['image'] : base_url('assets/images/hero_1.jpeg'); ?>" alt="home image">
				</div>
			</div>
			<div class="col-md-5 col-md-push-1 animate-box">
				<div class="section-heading">
					<h2>Kantin TemanSejalan</h2>
					<p><?= $setting['description']; ?></p>
					<p><a href="<?= base_url('about'); ?>" class="btn btn-primary btn-outline">tentang kami</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-featured-menu" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Menu Hari Ini</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Jelajahi pilihan menu kami hari ini dan temukan hidangan lezat yang disesuaikan dengan selera Anda. Dari hidangan pembuka yang menggugah selera hingga hidangan penutup yang memanjakan, kami memiliki semua yang Anda inginkan.</p>
					</div>
				</div>
			</div>
			<?php $i = 0;
			foreach ($menus as $menu) : ?>
				<?php if ($i % 2 == 0) : ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item animate-box">
							<div class="img-figure">
								<img src="<?= base_url('assets/uploads/menus/'); ?><?= $menu['photo']; ?>" class="img-responsive img-custom" alt="<?= $menu['menu']; ?>">
							</div>
							<h3 class="text-capitalize"><?= $menu['menu']; ?></h3>
							<span class="fh5co-price"><small>R</small><sub>P.</sub><?= $menu['price']; ?></span>
						</div>
					</div>
				<?php endif; ?>
				<?php if ($i % 2 == 1) : ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item margin_top animate-box">
							<div class="img-figure">
								<img src="<?= base_url('assets/uploads/menus/'); ?><?= $menu['photo']; ?>" class="img-responsive img-custom" alt="<?= $menu['menu']; ?>">
							</div>
							<h3 class="text-capitalize"><?= $menu['menu']; ?></h3>
							<span class="fh5co-price"><small>R</small><sub>P.</sub><?= $menu['price']; ?></span>
						</div>
					</div>
				<?php endif; ?>
			<?php $i++;
			endforeach; ?>
		</div>
	</div>
</div>

<div id="fh5co-slider" class="fh5co-section animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<div class="fh5co-heading">
					<h2>Menu Unik Kami</h2>
					<p>Nikmati spesial harian kami setiap hari. Dari hidangan laut segar hingga hidangan daging berkualitas tinggi, menu harian kami selalu menghadirkan kejutan bagi para pecinta kuliner.</p>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1 animate-box">
				<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
							<?php foreach ($best as $menu) : ?>
								<li style="background-image: url(<?= base_url('assets/uploads/menus/'); ?><?= $menu['photo']; ?>);">
									<div class="overlay-gradient"></div>
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
												<div class="slider-text-inner">
													<div class="desc">
														<h2><?= $menu['menu']; ?></h2>
														<p><?= $menu['description']; ?></p>
														<p><a href="<?= base_url('menus'); ?>" class="btn btn-primary btn-outline">View More</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-blog" class="fh5co-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2>Acara</h2>
				<p>Bergabunglah dengan kami untuk acara mendatang yang menjanjikan momen tak terlupakan! Dari sesi mencicipi eksklusif hingga malam kuliner bertema, acara kami dirancang untuk meningkatkan pengalaman bersantap Anda.</p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($events as $event) : ?>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?= base_url('gallery'); ?>" class="blog-bg" style="background-image: url(<?= base_url('assets/uploads/galleries/') . $event['image'] ?>);"></a>
						<div class="blog-text">
							<h3><a href="<?= base_url('gallery'); ?>"><?= $event['title']; ?></a></h3>
							<p><?= $event['information']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>