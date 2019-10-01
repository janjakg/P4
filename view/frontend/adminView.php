<?php $title = "Admin"; ?>

<?php ob_start(); ?>
<h1>Admin</h1>

<?php
if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "alien") 

{
  ?>

  <a href="adminLogin.php">déconnexion</a>

<h2>Commentaires signalés :</h2>



    <p><strong><?= htmlspecialchars($flaggedCom['author']) ?></strong> le <?= $flaggedCom['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($flaggedCom['comment'])) ?></p>
    <p><?= nl2br(htmlspecialchars($flaggedCom['signalled'])) ?></p>    
           



<h3>Création d'un nouveau chapitre : </h3>

  <form action="" method="post">

    <label for="name">Chapitre :</label><br>
    <input type="text" name="name" value=""> <br>

    <label for="text">Texte</label><br>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br><br>

    <button type="submit" name="valid">Valid</button>
     
  </form>

  
  <?php  
}
else
{
  echo 'Mot de passe incorrect';
}


?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>








    