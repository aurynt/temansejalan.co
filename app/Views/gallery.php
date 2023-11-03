<?= $this->extend('layout/guestLayout'); ?>
<?= $this->section('content'); ?>
<div id="fh5co-gallery" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Our Gallery</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
					</div>
				</div>
			</div>

			<?php $i = 0;
			foreach ($galleries as $gallery) : ?>
				<?php if ($i % 5 == 2) : ?>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?= base_url('assets/uploads/galleries/'); ?><?= $gallery['image']; ?>);" data-trigger="zoomerang"></div>
					</div>
				<?php else : ?>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url(<?= base_url('assets/uploads/galleries/'); ?><?= $gallery['image']; ?>);" data-trigger="zoomerang"></div>
						<div class="fh5co-bg-img" style="background-image: url(<?= base_url('assets/uploads/galleries/'); ?><?= $gallery['image']; ?>);" data-trigger="zoomerang"></div>
					</div>
				<?php endif; ?>
			<?php $i++;
			endforeach ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>