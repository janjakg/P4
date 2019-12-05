<?php $title = "Liste des commentaires " ?>

<?php ob_start(); ?>

<div class="shadow-none m-5 pb-5 bg-light">
  <div class="titre2">
    <h1 class="text-center">Billet simple pour l'Alaska</h1>
  </div>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
  <div class="container"><br>

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="index.php?action=adminIndex" role="tab"
          aria-controls="nav-home" aria-selected="true">Liste des commentaires signalés</a>
        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="index.php?action=adminCrud"
          role="tab" aria-controls="nav-profile" aria-selected="false">Liste des posts</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="index.php?action=createPost"
          role="tab" aria-controls="nav-contact" aria-selected="false">Créer un post</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>

    <div class="row">
      <h2 class="mb-5">Liste des posts : </h2>
    </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <th colspan="6" scope="col"><a class="btn btn-success" href="index.php?action=createPost">Create new
                post</a></th>
            <tr>
              <th scope="col">Chapitre</th>
              <th scope="col">Extrait</th>
              <th scope="col">Post</th>
              <th colspan="3" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($list = $posts->fetch()): ?>
            <tr>
              <td><strong><?= (stripslashes(strip_tags($list['title']))) ?></strong></td>
              <td><?= stripslashes(strip_tags((substr($list['content'],0,90)))) ?>...</td>
              <td><a class="btn btn-secondary" href="index.php?action=readPost&amp;postId=<?=($list['id']) ?>">Read</a>
              </td>
              <td><a class="btn btn-info" href="index.php?action=editPost&amp;idPost=<?= ($list['id']) ?>">Update</a>
              </td>
              <td><a class="btn btn-danger"
                  href="index.php?action=erasePost&amp;idPost=<?= ($list['id']) ?>&amp;idComment=<?= ($list['id']) ?>">Delete</a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div><br>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>