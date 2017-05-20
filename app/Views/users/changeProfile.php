<form method="POST" class="form" enctype="multipart/form-data">
	<p><input type="text" value="<?= $user->name ?>" name ="pseudo"/></p>
	<p><input type="text" value="<?= $user->mail ?>" name="mail" /></p>
	<p><input type="file" name="profilPicture" /></p>
	<p><input type="hidden" value="p=users.changeProfile" /></p>
	<p><button type="submit" >valider</button>
</form>	
