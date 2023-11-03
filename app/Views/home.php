<?= $this->extend('layout/guestLayout'); ?>

<?= $this->section('content'); ?>
<div id="fh5co-about" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
				<img src="<?= base_url('assets/images/hero_1.jpeg'); ?>" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
			</div>
			<div class="col-md-5 col-md-push-1 animate-box">
				<div class="section-heading">
					<h2>The Restaurant</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
					<p><a href="<?= base_url('about'); ?>" class="btn btn-primary btn-outline">Our History</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-featured-menu" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Today's Menu</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
					</div>
				</div>
			</div>
			<?php $i=0; foreach($menus as $menu) : ?>
					<?php if($i%2==0): ?>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
							<div class="fh5co-item animate-box">
								<img src="<?= base_url('assets/uploads/menus/'); ?><?= $menu['photo']; ?>" class="img-responsive" alt="<?= $menu['menu']; ?>">
								<h3 class="text-capitalize"><?= $menu['menu']; ?></h3>
								<span class="fh5co-price"><small>R</small><sub>P.</sub><?= $menu['price']; ?></span>
								<p><?= $menu['description']; ?></p>
							</div>
						</div>
					<?php endif; ?>
					<?php if($i%2==1): ?>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
							<div class="fh5co-item margin_top animate-box">
								<img src="<?= base_url('assets/uploads/menus/'); ?><?= $menu['photo']; ?>" class="img-responsive" alt="<?= $menu['menu']; ?>">
								<h3 class="text-capitalize"><?= $menu['menu']; ?></h3>
								<span class="fh5co-price"><small>R</small><sub>P.</sub><?= $menu['price']; ?></span>
								<p><?= $menu['description']; ?></p>
							</div>
						</div>
					<?php  endif; ?>
				<?php $i++; endforeach; ?>
		</div>
	</div>
</div>

<div id="fh5co-slider" class="fh5co-section animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<div class="fh5co-heading">
					<h2>Our Best <em>&amp;</em> Unique Menu</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis!</p>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1 animate-box">
				<aside id="fh5co-slider-wrwap">
				<div class="flexslider">
					<ul class="slides">
						<?php foreach($best as $menu): ?>
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
					<h2>Events</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
				</div>
			</div>
			<div class="row">
				<?php foreach($events as $event): ?>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-bg" style="background-image: url(<?= base_url('assets/uploads/galleries/').$event['image'] ?>);"></a>
							<div class="blog-text">
								<h3><a href="#"><?= $event['title']; ?></a></h3>
								<p><?= $event['information']; ?></p>
							</div> 
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>
