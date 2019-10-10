<?php $title = "Admin"; ?>

<?php ob_start(); ?>
<h1>Administration</h1>



  <a href="adminLogin.php">déconnexion</a>

  <div class="container"><br>
    <div class="row"><br>
      <h2>Liste des commentaires signalés :</h2>  
    </div>

    <div class="row"><br>
        <div class="table-responsive"><br>
          <table class="table table-hover table-bordered"><br>
         
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Post_Id</th>
                <th scope="col">Authort</th>
                <th scope="col">Comment</th>
                <th scope="col">Comment_date</th>
                <th scope="col">Signalled</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
                <td></td>               
              </tr>
              <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>             
              </tr>
              <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
                <td></td>               
              </tr>
            </tbody>
            
          </table>

        </div>
    </div>
  </div>


                         
    <h2>Création d'un nouveau chapitre : </h2>  
      
    <form action="listPostView" method="post">
        <div class="form-group">
          <label for="name">Chapitre :</label><br>
          <input type="text" class="form-control" name="name" value=""> <br>
        </div>  
        <div class="form-group">
          <label for="text">Texte :</label><br>
          <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea><br><br>
        </div>
        <div>
          <button type="submit" class="btn btn-primary" name="valid">Envoi</button>
        </div>
    </form>   

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>