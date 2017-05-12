<?php foreach ($musicsList as $key => $value): ?>
<div style="color:white;">

  <h3>Demande de partage en attente par <?=$value->name2?> </h3>
  <p>Titre du morceau demandé : <?=$value->title?></p>
  <p>Auteur : <?=$value->author?></p>
  <p>Nom du propriétaire : <?=$value->name?></p>
  <form action="index.php?p=users.deal" method="POST">
    <input type="hidden" name="id" value="<?=$value->id?>">
    <input type="submit" value="DEAL" class="btn btn-success">
  </form>
</div>
<?php endforeach; ?>
