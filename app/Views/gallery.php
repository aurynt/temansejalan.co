<?= $this->extend('layout/guestLayout'); ?>
<?= $this->section('content'); ?>
<div id="fh5co-gallery" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Galeri Kami</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Jelajahi pesta visual di galeri kami! Benamkan diri Anda dalam warna-warna cerah dan rasa yang ditangkap di setiap hidangan. Setiap gambar menceritakan kisah keunggulan kuliner dan semangat yang kami berikan pada setiap kreasi.</p>
					</div>
				</div>
			</div>

			<?php $i = 0;
			foreach ($galleries as $gallery) : ?>
				<?php if ($i % 4 == 1) : ?>
					<div class="col-md-6 col-sm-6 fh5co-gallery_item">
						<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?= base_url('assets/uploads/galleries/'); ?><?= $gallery['image']; ?>);" data-trigger="zoomerang"></div>
					</div>
				<?php else : ?>
					<div class="col-md-3 col-sm-3 fh5co-gallery_item">
						<div class="fh5co-bg-img" style="background-image: url(<?= base_url('assets/uploads/galleries/'); ?><?= $gallery['image']; ?>);" data-trigger="zoomerang"></div>
					</div>
				<?php endif; ?>
			<?php $i++;
			endforeach ?>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>