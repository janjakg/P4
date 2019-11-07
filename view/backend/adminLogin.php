
<?php $title = "Connexion"; ?>


<?php ob_start(); ?>


<h1 class="text-center">CONNEXION</h1>


<form action="index.php?action=checkUser" method="post">

    <div class="form-group row">
      <label for="pseudo" class="col-sm-2 col-form-label">Email :</label><br>
      <div class="col-sm-10">
        <input type="email" class="form-control"  name="email" id="email"placeholder="Votre email">
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Mot de passe :</label><br>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="password" id="password"placeholder="Votre mot de passe">
      </div>
    </div>

    
      <button type="submit" class="btn btn-primary">Connexion</button>
    
</form>


<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>