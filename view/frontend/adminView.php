<?php $title = "Admin"; ?>

<?php ob_start(); ?>
<h1>Admin</h1>

<?php
if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "alien") 

{
  ?>

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
                <th scope="col">id</th>
                <th scope="col">post_Id</th>
                <th scope="col">authort</th>
                <th scope="col">comment</th>
                <th scope="col">comment_date</th>
                <th scope="col">signalled</th>
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
              </tr>
              <tr>
                <th scope="row">2</th>
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
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>


  <div class="container"><br>
    <div class="row"><br>
      <h2>Liste des Posts :</h2>  
    </div>
  </div>



                
<h2>Création d'un nouveau chapitre : </h2>

  <form action="listPostView" method="post">

    <label for="name">Chapitre :</label><br>
    <input type="text" name="name" value=""> <br>

    <label for="text">Texte</label><br>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br><br>

    <button type="submit" name="valid">Valid</button>
     
  </form>
  
  <?php  
}
else
{
  echo 'Mot de passe incorrect';
}

?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>








    