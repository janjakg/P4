  
<?php $title = "Liste des commentaires" ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container"><br>
      <div class="row"><br>
        <h2>Liste des Posts signalés :</h2>  
      </div>
      <div class="row">
          <div class="table-responsive"><br>
            <table class="table table-hover table-bordered"><br>
              <thead>
                <tr>                
                  <th scope="col">Id</th>
                  <th scope="col">Comment</th>                
                  <th scope="col">Signalement</th>
                  <th colspan="2"scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php while ($row = $listComment->fetch()): ?> 
                  <tr>            
                      <th scope="row"><?= nl2br(htmlspecialchars($row['id'])) ?></th>            
                      <td><?= nl2br(htmlspecialchars($row['comment'])) ?></td>
                      <td><?= nl2br(htmlspecialchars($row['signalled'])) ?></td>
                      <td><a class="btn btn-danger"href="index.php?action=eraseComment&amp;commentId">Supprimer</a></td> 
                      <td><button type="button" class="btn btn-success">Conserver</button></td>
                       
                    <?php endwhile; ?>                                
                  </tr>                                    
                </tr>
              </tbody>
            </table>
          </div>
      </div><br> 
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>