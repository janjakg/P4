<?php $title = "Connexion"; ?>


<?php ob_start(); ?>
<p><a href="index.php">Accueil</a></p>

  <p>Veuillez indiquer votre mot de passe pour acceder à la page d'administration</p>
    <form action="adminView.php" method="post">
      <p>
      <fieldset>
      <legend>Connexion</legend>
        <label for="email">Adresse email :</label><br>
        <input type="email" name="courriel"><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" name="mot_de_passe"/><br><br>
        <input type="submit" value="Valider">
      </fieldset>
      </p>
    </form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

   






