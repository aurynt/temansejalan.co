<?= $this->extend('layout/guestLayout'); ?>
<?= $this->section('content'); ?>
<div id="fh5co-featured-menu" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Our Delicous Menu</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
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
							<p><?= $menu['description']; ?></p>
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
							<p><?= $menu['description']; ?></p>
						</div>
					</div>
				<?php endif; ?>
			<?php $i++;
			endforeach; ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>