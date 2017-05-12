<div id="content-accueil">
  <div id="profil" class="row">
    <img src=<?= $src ?> alt='profilePicture' id='img-profil' class='img-circle' />
    <h2><?=$profil->name?></h2>
    <div id="artiste-head" class="col-xs-7">
      <h3><?= $myLibrary->title?>- <?= $myLibrary->author?></h3>
      <h3>Echangé le <?= $myLibrary->releaseDate?></h3>
      <h3>Sur "support" avec "user".</h3>
    </div> 
    <img src="/img/Fichier 7.svg" id="img-contact" class="col-xs-3"> 
  </div>
  <div id="content-icone" class="row">
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

