<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<form method="post">
<div class="login-page">
<img class="logo" src="img/logo.png" width="200">
  <div class="form">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>