<?php $title = "Connexion"; ?>


<?php ob_start(); ?>
<br>
<br>
<div align="center">
<h1>CONNEXION</h1>
</div>
<form action="index.php?action=adminIndex" method="post">

    <div class="form-group row">
      <label for="pseudo" class="col-sm-2 col-form-label">Pseudo :</label><br>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="pseudo" id="pseudo"placeholder="Votre pseudo">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Mot de passe :</label><br>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="password" id="password"placeholder="Votre mot de passe">
      </div>
    </div>

    <div align="center">
      <button type="submit" class="btn btn-primary" name="formLogin">Connexion</button>
    </div>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>