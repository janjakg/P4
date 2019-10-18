  
<?php $title = "Lecture du Post" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">    
    <a href="index.php?action=adminCrud">Retour à la liste des posts</a>
    <h2>Lecture du post</h2>
    <p>
    <button type="button" class="btn btn-success">Update</button>
    </p>
</section>

<section class="shadow-lg p-3 mb-5 bg-white rounded">

  <p>
    <?= nl2br(htmlspecialchars($displayPost['content'])) ?>
    <br />      
  </p>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>