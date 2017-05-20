<div id="requete">
	<h2 class="text-center">Demandes utilisateurs</h2>
	<?php foreach ($musicsList as $key => $value): ?>
	<h4>Demande de partage en attente par <?=$value->name2?> </h4>
  	<p><strong>Titre du morceau demandé :</strong> <?=$value->title?></p>
  	<p><strong>Auteur :</strong> <?=$value->author?></p>
  	<p><strong>Nom du propriétaire :</strong> <?=$value->name?></p>
  	<form action="index.php?p=users.deal" method="POST">
    	<input type="hidden" name="id" value="<?=$value->id?>">
    	<input type="submit" value="DEAL" class="btn btn-success">
  	</form>
	<?php endforeach; ?>
</div>