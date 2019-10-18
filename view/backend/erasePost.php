  
<?php $title = "Post supprimé" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <p>Ce post a bien été supprimé. Merci</p>
    <a href="index.php?action=adminCrud">Retour à la liste des posts</a>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>