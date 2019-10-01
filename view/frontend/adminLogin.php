<?php $title = "Connexion"; ?>


<?php ob_start(); ?>
<p><a href="index.php">Accueil</a></p>

  <p>Veuillez indiquer votre mot de passe pour acceder à la page d'administration</p>
    <form action="adminView.php" method="post">
      <p>
      <fieldset>
      <legend >Connexion</legend>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Adresse email :</label><br>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="courriel"><br>
        </div>
        </div>
        <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Mot de passe :</label><br>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="mot_de_passe"/><br><br>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
      </p>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

   





