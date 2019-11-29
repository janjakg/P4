<?php $title = "Liste des commentaires signalés" ?>

<?php ob_start();?>

<div class="shadow-none m-5 pb-5 bg-light">
  <div class="titre2">
    <h1 class="text-center">Billet simple pour l'Alaska</h1>
  </div>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
  <div class="container"><br>

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

    <div class="row"><br>
      <h2>Liste des commentaires signalés :</h2>
    </div>
    <div class="row">
      <div class="table-responsive-md"><br>
        <table class="table table-hover table-bordered"><br>
          <thead>
            <tr>

              <th scope="col">Comment</th>

              <th colspan="2" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $signaledComments->fetch()): ?>
            <tr>

              <td><?= nl2br(htmlspecialchars($row['comment'])) ?></td>
              <td><a class="btn btn-danger"
                  href="index.php?action=eraseComment&amp;idComment=<?= ($row['id']) ?>">Supprimer</a></td>
              <?php if ($row['signalled'] == 1): ?>
              <td><a href="index.php?action=saveComment&amp;commentId=<?= ($row['id']) ?>"
                  class="btn btn-success">Valider</a></td>
              <?php endif; ?>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div><br>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>