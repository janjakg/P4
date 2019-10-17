  
<?php $title = "Liste des commentaires signalés" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>
<p>
<a href="index.php?action=adminCrud">Liste de tous les posts</a>
</p>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container"><br>
      <div class="row"><br>
        <h2>Liste des commentaires signalés :</h2>  
      </div>
      <div class="row">
          <div class="table-responsive"><br>
            <table class="table table-hover table-bordered"><br>
              <thead>
                <tr>                
                  
                  <th scope="col">Comment</th>                
                
                  <th colspan="2"scope="col">Action</th>
                </tr>
              </thead>
              <tbody>            
              <?php while ($row = $signaledComments->fetch()): ?> 
                  <tr>            
                                
                      <td><?= nl2br(htmlspecialchars($row['comment'])) ?></td>
                      <td><a class="btn btn-danger"href="index.php?action=eraseComment&amp;idComment=<?= ($row['id']) ?>">Supprimer</a></td> 
                      <?php if ($row['signalled'] == 1): ?>
                      <td><a href="index.php?action=saveComment&amp;commentId=<?= ($row['id']) ?>"class="btn btn-success">Sauvegarder</a></td>
                      <?php endif; ?>            
                  </tr>   
                  <?php endwhile; ?>                                
              </tbody>
            </table>
          </div>
      </div><br> 
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>