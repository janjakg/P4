<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska</h1>
<p>Derniers posts :</p>


<?php
while ($report = $reportedPosts->fetch())
{
?>
    <div class="news">
        <h3>
        <em><a href="index.php?action=post&amp;id=<?= $report['id'] ?>"><?= htmlspecialchars($report['reported_post']) ?></a></em>
            
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