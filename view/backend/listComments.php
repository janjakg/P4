  
<?php $title = "Liste des commentaires" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <p>Liste des commentaires</p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>