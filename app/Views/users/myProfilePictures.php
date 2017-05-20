<?php
	foreach ($pictures as $key => $value) : ?>
		<div>
			<a href="index.php?p=users.changeProfile&picture_id= <?= $pictures[$key]->id ?>" ><img src="<?= $pictures[$key]->src ?>" alt='photo de profile' with="150" height="150" class="img-circle"/></a>
		</div>
<?php endforeach ?>			