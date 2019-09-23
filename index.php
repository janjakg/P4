<?php
require('controller/frontend.php');

try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
            
        }
    }
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
              addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
  else if($_GET['action'] == 'signalPost') {
      if(isset($_GET['id']) && $_GET['id'] > 0) {
         signalPost($_GET['id']);
         echo 'Commentaire signalé! En attente de traitement';
      }
     
    }

}
else {
    listPosts();
}
} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}