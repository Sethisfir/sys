<form method="post">
	 <?= $form->input("musicName", "Rechercher");?>
	 <?= $form->submit();?>
</form>	 

<?php
	foreach ($search as $search) {
		echo "<p>Alors moi c'est ".$search->name." et j't'".$search->process." ".$search->title." de ".$search->author." sorti le ".$search->releaseDate." en format ".$search->type.".</p>";
	}