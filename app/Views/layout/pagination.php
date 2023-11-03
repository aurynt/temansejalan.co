<?php

use CodeIgniter\Pager\PagerRenderer;
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination justify-content-center">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="page-item font-weight-bold">
				<a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                &#8701
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item <?= $link['active'] ? 'active' : '' ?>" >
				<a class="page-link" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="page-item font-weight-bold">
				<a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                &#8702
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
