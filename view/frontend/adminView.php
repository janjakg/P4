<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
<?php
if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "alien") 

{
  ?>

  <a href="index.php">déconnexion</a>

<h2>Création d'un nouveau chapitre : </h2>

  <form action="index.php?action=post&amp;id=" method="post">

    <label for="name">Name</label><br>
    <input type="text" name="comment" value=""> <br>

    <label for="text">Text</label><br>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>

    <button type="submit" name="valid">Valid</button>
     
  </form>


  <?php
  
}
else
{
  echo 'Mot de passe incorrect';
}
?>
</body>
</html>








    