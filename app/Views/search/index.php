<div id="formSearch">
	<form method="post" class="form">
	 	<?= $form->input("musicName", "Rechercher");?>
	 	<?= $form->submit();?>	 
	<h2 class="text-center">Derniers ajouts</h2>
	<?php
		foreach ($search as $search) {
			echo "<p><strong>Nom : </strong>".$search->name."<br><strong>Type : </strong>".$search->process."<br><strong>Titre : </strong>".$search->title."<br><strong>Artiste : </strong>".$search->author."<br><strong>Sorti le : </strong>".$search->releaseDate."<br><strong>Format : </strong>".$search->type.".</p>";
		}
	?>
	</form>
</div>