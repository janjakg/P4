<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<h1>TABLEAU  DE BORD</h1>


<a href="view/frontend/listPostsView.php">déconnexion</a>

<?php
while ($datas = $chapter->fetch())
{
?>
<h2>Création d'un nouveau chapitre : </h2>

  <form action="index.php?action=post&amp;id=<?= $datas['id'] ?>" method="post">

    <label for="name"><?= $datas['id'] ?></label>
    <input type="text" name="chapter" value="chapter name"> <br>

    <label for="text">Text</label>
    <textarea name="chapter" id="chapter" cols="30" rows="10"><?= $datas['chapter_name'] ?></textarea><br>

    <button type="submit" name="valid">Valid</button>
     
  </form>
  
      <p>
        <?= nl2br(htmlspecialchars($datas['content'])) ?>
        <br />            
      </p>
    
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>