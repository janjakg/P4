  
<?php $title = "Liste des commentaires " ?>

<?php ob_start(); ?>
<div class="headline">
    <h1>Billet simple pour l'Alaska</h1>
</div>

<section class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="container"><br>
      <div class="row"><br>
        <h2>Liste des posts :</h2>  
      </div>
      <div class="row">
          <div class="table-responsive"><br>
            <table class="table table-hover table-bordered"><br>
              <thead>
              <th colspan="5"scope="col"><button type="button" class="btn btn-success">Create new post</button></th>
                <tr>               
                  
                  <th scope="col">Chapitre</th>
                  <th scope="col">Post</th>                 
                
                  <th colspan="3"scope="col">Action</th>                  
                </tr>
              </thead>
              <tbody>            
              <?php while ($list = $posts->fetch()): ?> 
                  <tr>        
                      <td><?= nl2br(htmlspecialchars($list['id'])) ?></td>          
                      <td><?= nl2br(htmlspecialchars($list['content'])) ?></td>  
                      <td><button type="button" class="btn btn-secondary">Read</button></td>                     
                      <td><button type="button" class="btn btn-info">Update</button></td>
                      <td><button type="button" class="btn btn-danger">Delete</button></td>                           
                  </tr>   
              <?php endwhile; ?>                                
              </tbody>
            </table>
          </div>
      </div><br> 
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>