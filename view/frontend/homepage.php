<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<div class="container-fluid">
  <div class="page">
    <h1 class="middle">Billet simple pour l'Alaska</h1>

    <div class="welcomeText">
      <p class="text-center"><strong>Bienvenue sur le site officiel du nouveau livre de Jean FORTEROCHE.</strong></p>
    </div>
    <div class="access">
      <div class="text-center">
        <a href="index.php?action=about" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Jean
          Forteroche</a>
        <a href="index.php?action=listPosts" class="btn btn-secondary btn-lg active" role="button"
          aria-pressed="true">Derniers chapitres</a>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>