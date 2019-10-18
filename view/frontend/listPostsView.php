<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<div class="headline">
<h1>Billet simple pour l'Alaska</h1>
</div>





<?php while ($data = $posts->fetch()):?>


    <div class="news">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>
        <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></em>
            
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            
        </p>
        </div>
    </div>

<?php endwhile;?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>