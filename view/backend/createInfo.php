<?php $title = "Un post a été créé" ?>

<?php ob_start(); ?>
<div class="headline">
  <div class="shadow-none m-5 pb-5 bg-light">
    <h1>Billet simple pour l'Alaska</h1>
  </div>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
  <?php if (isset($_GET['idPost'])): ?>
  <p>Un post a bien été modifié. Merci</p>
  <?php else: ?>
  <p>Un post a bien été créé. Merci</p>
  <?php endif; ?>

  <a href="index.php?action=createPost">Retour à l'écriture de post</a>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>