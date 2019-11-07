
  <?php $title = "Creer un post" ?>

  <?php ob_start(); ?>
  <div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
  </div>

  <section class="shadow-lg p-3 mb-5 bg-white rounded">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="index.php?action=adminIndex"
          role="tab" aria-controls="nav-home" aria-selected="true">Liste des commentaires signalés</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="index.php?action=adminCrud" role="tab"
          aria-controls="nav-profile" aria-selected="false">Liste des posts</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="index.php?action=createPost"
          role="tab" aria-controls="nav-contact" aria-selected="false">Créer un post</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>

    <h2>Nouveau Post</h2>
    <a href="index.php?action=adminCrud">Retour à la liste des posts</a>
    <form action="index.php?action=createInfo" method="post">
      <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="content">Corps du chapitre</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Envoi</button>
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