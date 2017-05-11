<div id="content-accueil">
  <div id="profil" class="row">
    <?php echo "<img src=$src alt='profilePicture' id='img-profil' class='img-circle' />"; ?>
    <h2><?=$profil->name?></h2>
    <div id="artiste-head">
    <?php foreach ($myLibrary as $key => $value): ?>
      <h3><?= $value->title?>- <?= $value->author?></h3>
      <h3>Echangé le <?= $value->releaseDate?></h3>
      <h3>Sur "support" avec "user".</h3>
    <?php endforeach ?>
    </div>  
  </div>
  <div id="content-icone">
    <div class="liste-icone">
      <a href="#"><div class="col-xs-offset-1 col-xs-5 icones"><img src="img/Fichier 5.svg" alt="" width="90%"></div></a>
      <a href="index.php?p=posts.index"><div class="col-xs-offset-1 col-xs-5 icones"><img src="img/Fichier 3.svg" alt="" width="90%"></div></a>
    </div>
    <div class="liste-icone">
      <a href="#"><div class="col-xs-offset-1 col-xs-5 icones"><img src="img/Fichier 2.svg" alt="" width="90%"></div></a>
      <a href="index.php?p=search.index"><div class="col-xs-offset-1 col-xs-5 icones"><img src="img/Fichier 1.svg" alt="" width="90%"></div></a>
    </div>
  </div>
</div>

