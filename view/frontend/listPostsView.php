<?php 

$title = "Billet simple pour l'Alaska"; 
?>

<?php ob_start();?>

<div class="banner">

  <div class="titre">
    <h1 class=" m-5 pb-5">Billet simple pour l'Alaska</h1>
  </div>
  <div class="text-center"><img src="public/images/alaska7" class="img-fluid" alt="Responsive image"></div>
</div>

<?php while ($data = $posts->fetch()):?>

<div class="news">
  <div class="shadow p-3 mb-5 bg-white rounded">

    <h3>
      <em><a
          href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= strip_tags(stripslashes($data['title'])) ?></a></em>
    </h3>


    <p><?= nl2br(strip_tags(stripslashes(substr($data['content'],0,200)))) ?>...</p>
    <p>le <?= nl2br(strip_tags(stripslashes($data['creation_date_fr']))) ?></p>
  </div>
</div>

<?php endwhile;?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>