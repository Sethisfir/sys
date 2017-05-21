<div>
<?php foreach ($pictures as $key => $value) : ?>
		
			<a href="index.php?p=users.changeProfile&picture_id= <?= $pictures[$key]->id ?>" ><img src="<?= $pictures[$key]->src ?>" alt='photo de profile' class="img-circle img-profil"/></a>
		
<?php endforeach ?>		
</div>	