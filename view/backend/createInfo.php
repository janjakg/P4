<?php
session_start();

?>
<?php $title = "Un post a été créé" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <p>Un post a bien été créé. Merci</p>
    <a href="index.php?action=createPost">Retour à l'écriture de post</a>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>