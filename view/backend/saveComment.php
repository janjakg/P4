  
<?php $title = "Commentaire sauvegardé" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <p>Ce commentaire est sauvegardé</p>
    <a href="index.php?action=adminIndex">Retour aux commentaires signalés</a>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>