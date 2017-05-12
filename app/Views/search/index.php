
<div id="searchContainer" style="color: #00FF00">
</div>

<div id="formSearch">
	<form method="post" class="form">
	 	<?= $form->input("musicName", "Rechercher");?>
	 	<?= $form->submit();?>	 
	<h2 class="text-center">Derniers ajouts</h2>
	<?php
		foreach ($search as $search) : ?>
			<p>
				<strong>Nom : </strong><?= $search->name ?><br>
				<strong>Type : </strong><?= $search->process ?><br>
				<strong>Titre : </strong><?= $search->title ?><br>
				<strong>Artiste : </strong><?= $search->author ?><br>
				<strong>Sorti le : </strong><?= $search->releaseDate ?><br>
				<strong>Format : </strong><?= $search->type ?>
			</p>
		<?php endforeach ?>
	</form>
</div>
