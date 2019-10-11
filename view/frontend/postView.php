<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="headline">
<h1>Billet simple pour l'Alaska</h1>
</div>


<section class="news">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
        <div id="date">
            <em>le <?= $post['creation_date_fr'] ?></em>
        </div>
    </div>
    </section>
<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Commentaires</h2>
    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" id="author" name="author"/>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire</label>
            <textarea class="form-control" id="comment" name="comment"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Envoi</button>
        </div>
    </form>
</section>
<?php if ($comments): ?>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<div class="comments">
        <?php while ($comment = $comments->fetch()): ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>           
            <?php if ($comment['signalled'] == 0): ?>
                <a href="index.php?action=signalledComment&amp;idComment=<?= $comment['id'] ?>&amp;idPost=<?= $_GET['id'] ?>" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Signaler</a>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</div>
<?php else: ?>
<p>Pas de commentaire</p>
<?php endif; ?>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
