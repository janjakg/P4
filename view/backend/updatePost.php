<?php $title = "Post à modifier" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Post à modifier</h2>
      <form action="index.php?action=adminCrud&amp;id=" method="post">
        <textarea name="update" id="update" cols="30" rows="10"></textarea>
        <button type="submit">Modifier</button>
      </form> 
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>