<?php $title = "Post à modifier" ?>

<?php ob_start(); ?>
<div class="headline">
  <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
  <h2>Post à modifier</h2>
  <a href="index.php?action=adminCrud">Retour à la liste des posts</a>

  <form action="index.php?action=postUpdated" method="post">
    <div class="form-group">
      <textarea name="update" id="update" cols="30" rows="10"><?=$_GET['content'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</section>

<script src="../../node_modules/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
    mode: 'textareas',
    language: 'fr_FR'
  });
</script>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>