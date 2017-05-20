<?php
	foreach ($pictures as $key => $value) : ?>
		<div>
			<img src="<?= $pictures[$key]->src ?>" alt='photo de profile' with="150" height="150" />
		</div>
<?php endforeach ?>			