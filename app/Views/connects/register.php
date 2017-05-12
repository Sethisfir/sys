<?php if($errors): ?>
    <div class="alert alert-danger">
        Enregistrement échoué
    </div>
<?php endif; ?>

<form method="post">
<div class="login-page">
  <div class="form">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('mail', 'E-mail', ['type' => 'mail']); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <?= $form->input('password2', 'Retaper le mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>