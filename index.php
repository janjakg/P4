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

            case 'adminIndex' :
                getSignaledComments();
                break;

            case 'eraseComment' :
                if(isset($_GET['idComment']) && $_GET['idComment'] > 0) {
                  eraseComment( $_GET['idComment']);

                } else {
                  throw new Exception(' aucun identifiant de commentaire effacé');
                }
                 break;

            case 'saveComment' :
                if(isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                  saveComment($_GET['commentId']);
                } else {
                  throw new Exception('aucun identifiant de commentaire sauvegardé');
                }
                break;

            case 'adminCrud' :
                postListing();
                break;

            case 'erasePost' :
                if(isset($_GET['idPost']) && $_GET['idPost'] > 0) {
                  erasePost($_GET['idPost']);
                } else {
                  throw new Exception('aucun identifiant de post supprimé');
                }
                break;

            case 'readPost' :
                if(isset($_GET['postId']) && $_GET['postId'] > 0) {
                  readPost($_GET['postId']);
                } else {
                  throw new Exception('aucun identifiant de lecture affiché');
                }
                break;

            case 'createPost' :
              createPost();
            break;


            default:
              echo 'Pas d\'action';
        }
    } else {
        listPosts();
    }
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }

