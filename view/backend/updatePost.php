<?php $title = "Post à modifier" ?>

<?php ob_start(); ?>
<div class="headline">
  <div class="shadow-none m-5 pb-5 bg-light">
    <h1>Billet simple pour l'Alaska</h1>
  </div>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
  <h2>Post à modifier</h2>
  <a href="index.php?action=adminCrud">Retour à la liste des posts</a>

  <form action="index.php?action=postUpdated" method="post">
    <div class="form-group">
      <label for="title">Titre</label>
      <input type="text" class="form-control" name="title" id="title" value="<?=$_GET['title'] ?>">
    </div>
    <div class="form-group">
    <label for="content">Contenu</label>
      <textarea name="content" id="content" cols="30" rows="10"><?=$_GET['content'] ?></textarea>
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