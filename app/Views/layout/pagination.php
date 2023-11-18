<?php

use CodeIgniter\Pager\PagerRenderer;

$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination justify-content-center">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="page-item font-weight-bold">
				<a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="Next">
					<span class="material-icons">
						keyboard_arrow_right
					</span>
					<span class="sr-only">Next</span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item <?= $link['active'] ? 'active' : '' ?>">
				<a class="page-link" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="page-item font-weight-bold">
				<a class="page-link" href="<?= $pager->getNext() ?>" aria-label="Next">
					<span class="material-icons">
						keyboard_arrow_right
					</span>
					<span class="sr-only">Next</span>
				</a>
			</li>


		<?php endif ?>
	</ul>
</nav>