<?php
require('controller/frontend.php');
require('controller/backend.php');

try
{
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listPosts':
                listPosts();
                break;

            case 'post':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                } else {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                }
                break;

            case 'addComment':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    } else {
                        echo 'Erreur : tous les champs ne sont pas remplis !';
                    }
                } else {
                    echo 'Erreur : aucun identifiant de billet envoyé';
                }
                break;

            case 'signalledComment':
                if (isset($_GET['idComment']) && $_GET['idComment'] > 0) {
                    signalledComment($_GET['idComment']);                    
                } else {
                    throw new Exception('Aucun identifiant de commentaire envoyé');
                }
                break;

            case 'getSignalComment':
                if(isset($_GET['idComment']) && $_GET['idComment'] > 0) {
                  getSignalComment($_GET['idComment']);
                 
                } else {
                    throw new Exception('Affichage commentaire impossible');
                }  
                break;
                
            case 'listComments' :
                if(isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                  listComments($_GET['commentId']);                  
                }  else {
                  throw new Exception(' aucun identifiant de liste envoyé');                
                }
                break;
                
            case 'eraseComment' :
            if(isset($_GET['commentId']) && $_GET['commentId'] > 0) {
              eraseComment( $_GET['commentId']);
            } else {
              throw new Exception(' aucun identifiant de commentaire effacé');
            }
        }
    } else {
        listPosts();
    }
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }  

  