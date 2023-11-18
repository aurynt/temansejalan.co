<?= $this->extend('layout/guestLayout'); ?>
<?= $this->section('content'); ?>
<div id="fh5co-about" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
				<img src="<?= base_url('assets/'); ?>images/hero_1.jpeg" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
			</div>
			<div class="col-md-5 col-md-push-1 animate-box">
				<div class="section-heading">
					<h2>Kantin TemanSejalan</h2>
					<p><?= $setting['description']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-timeline">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<ul class="timeline animate-box">
					<li class="timeline-heading text-center animate-box">
						<div>
							<h3>Our Experience</h3>
						</div>
					</li>
					<?php $no = 0;
					foreach ($experiences as $exp) : ?>
						<?php if ($no % 2 == 0) : ?>
							<li class="animate-box timeline-unverted">
								<div class="timeline-badge"><i class="icon-genius"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title"><?= $exp['title']; ?></h3>

									</div>
									<div class="timeline-body">
										<p><?= $exp['description']; ?></p>
									</div>
								</div>
							</li>
						<?php else : ?>
							<li class="timeline-inverted animate-box">
								<div class="timeline-badge"><i class="icon-genius"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h3 class="timeline-title"><?= $exp['title']; ?></h3>
									</div>
									<div class="timeline-body">
										<p><?= $exp['description']; ?></p>
									</div>
								</div>
							</li>
						<?php endif ?>
					<?php $no++;
					endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>