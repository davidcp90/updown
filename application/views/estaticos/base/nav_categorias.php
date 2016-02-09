<nav class="categories-bar">
	<div class="cat-container">
		<?php foreach ($cats as $p): ?>
		<a href="<?= site_url($cat_url);?>/<?=$p['id'];?>" class="item-cat"><?= $p['nombre']; ?></a>
		<?php endforeach ?>
		<div class="bt_green btn-cats">
			<a href="<?= site_url($cta_url);?>"><?= $cta_text; ?></a>
		</div>
	</div>
</nav>