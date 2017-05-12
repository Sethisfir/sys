<form method="post" class="form">
	<div class="form-group">
		<label for="search">Rechercher</label>
	 	<input type="search" name="search" id="search"  class="form-control"/>
	 	<button type="submit" class="form-control">Rechercher</button>
	</div> 
</form>	 

<div id="searchContainer" style="color: #00FF00">
</div>
<?php
	foreach ($search as $search) : ?>
		<p style='color:white'>Alors moi c'est "<?=$search->name ?>" et j't'"<?= $search->process ?>" "<?= $search->title ?>" de "<?= $search->author ?>" sorti le "<?= $search->releaseDate ?>" en format "<?= $search->type ?>".</p>
	<?php endforeach ?>