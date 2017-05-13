<div id="searchContainer" style="color: #00FF00">
	<!-- ICI, LES Resultats de la recherche -->
</div>
<!--Formulaire recherche-->
<form method="post" id="formSearch">
	<div class="form-group">
		<label>Rechercher</label>
	 	<input type="text" name="search" id="search" class="form-control"/>
	 </div>
	 <div class="form-group">
	 	<label>Echange</label>
		<input type="radio" name="process" class="process"	value="1"/>
		<label>Don</label>
		<input type="radio" name="process" class="process"	value="2"/>
		<label>Partage</label>
		<input type="radio" name="process" class="process"	value="3"/>
	</div>
</form>
<!--Derniers ajout-->
<div id="lastAdd" class="form">
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
</div>	
