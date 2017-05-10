<?php
		echo "<img src=$src alt='profilePicture' width='150px' height='150px' />";
	 	echo "<p>Je m'appelle $profil->name !</p>";
	 	echo "<p>Et mon adress mail est $profil->mail</p>";
	 	foreach ($myLibrary as $library) { ?>
	 		<p><?= $library->title?></p>
	 		<p><?= $library->author?></p>
	 		<p><?= $library->releaseDate?></p>
	 	<?php } ?>

	 	<h1><a href="index.php?p=search.index">Petite loupe</a></h1>
