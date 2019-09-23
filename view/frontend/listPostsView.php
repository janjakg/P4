<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska</h1>


<a href="view/backend/adminView.php">connexion</a>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
        <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></em>
            
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>