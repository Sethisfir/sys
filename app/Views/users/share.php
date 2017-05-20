<div id="demandes">
	<h2 class="text-center">Mes Demandes en cours</h2>
	<?php foreach ($myRequest as $key => $value): ?>
  		<h4>Demande adressé à <?=$value->name?> </h4>
  		<p><strong>Titre du morceau demandé :</strong> <?=$value->title?></p>
  		<p><strong>Auteur :</strong> <?=$value->author?></p>
  		<hr>
	<?php endforeach; ?>
</div>