<div id="content-accueil">
  <div id="profil">
    <?php echo "<img src=$src alt='profilePicture' width='150px' height='150px' />"; ?>
    <h2><?=$profil->name?></h2>
    <?php foreach ($myLibrary as $key => $value): ?>
      <h3><?= $value->title?>- <?= $value->author?></h3>
      <h3>Echangé le <?= $value->releaseDate?></h3>
      <h3>Sur "support" avec "user".</h3>
    <?php endforeach ?>
    
    <img src="/img/Fichier 7.svg" id="img-contact">
  </div>
  <div id="content-icone">
    <div class="liste-icone">
      <img src="img/Fichier 5.svg" alt="" width="50%">
      <a href="index.php?p=posts.index"><img src="img/Fichier 3.svg" alt="" width="50%"></a>
    </div>
    <div class="liste-icone">
      <img src="img/Fichier 2.svg" alt="" width="50%">
      <a href="index.php?p=search.index"><img src="img/Fichier 1.svg" alt="" width="50%"></a>
    </div>
  </div>
</div>

