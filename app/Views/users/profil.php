<div style='color:white'>
	<p><?= $user->name ?></p>
	<p><?= $user->mail ?></p>
	<p><?= $rights ?></p>
	<p><img src="<?= $user->src ?>" alt="photo de profil" class='img-circle img-profil'/></p>
	<a href="index.php?p=users.changeProfile" >Modifier</a>
	<a href="index.php?p=users.myProfilePicture">Mes photos de profils</a>
</div>	
