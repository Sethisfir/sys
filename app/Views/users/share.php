<h3 style="color:white; font-size: 2em;"><strong>Mes Demandes en cours</strong></h3>
<?php foreach ($myRequest as $key => $value): ?>
<div style="color:white;">

  <h3>Demande adressé à <?=$value->name?> </h3>
  <p>Titre du morceau demandé : <?=$value->title?></p>
  <p>Auteur : <?=$value->author?></p>
</div>
<?php endforeach; ?>