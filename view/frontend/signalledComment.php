 
<?php $title = "Commentaire signalé" ?>

<?php ob_start(); ?>
<div class="headline">
<div class="shadow-none m-5 pb-5 bg-light"><h1>Billet simple pour l'Alaska</h1></div>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <p>Votre commentaire a bien été signalé. Merci</p>
    <a href="index.php?action=post&amp;id=<?= $_GET['idPost']?>">Retour à l'article</a>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>