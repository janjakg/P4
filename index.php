<?php
require('controller/frontend.php');
require('controller/backend.php');
try
{
    if (isset($_GET['action'])) {
        switch ($_GET['action'])  {
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

            case 'adminIndex':           
                  getSignaledComments();
                    break;

            case 'eraseComment':
                if (isset($_GET['idComment']) && $_GET['idComment'] > 0) {
                  eraseComment( $_GET['idComment']);
                } else {
                  throw new Exception(' aucun identifiant de commentaire effacé');
                }
                 break;

            case 'saveComment':
                if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                  saveComment($_GET['commentId']);
                } else {
                  throw new Exception('aucun identifiant de commentaire sauvegardé');
                }
                break;

            case 'updatePost':         
                if (isset($_GET['title']) && isset($_GET['content'])){
                  updatePost($_GET['title'], $_GET['content']);
                } else {
                  throw new Exception('aucun identifiant de update ');
                }               
                break;

            case 'postUpdated':            
              if(isset($_GET['idPost']) && !empty($_POST['content']) && !empty($_POST['title'])) {
                postUpdated($_GET['idPost'],addslashes(strip_tags($_POST['title'])), addslashes(strip_tags($_POST['content'])));              
                } else {
                  throw new Exception('aucun post updated');
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

            case 'sendPost' :
                if(!empty($_POST['title']) && !empty($_POST['content'])) {
                  sendPost(addslashes(strip_tags($_POST['title'])),addslashes(strip_tags($_POST['content'])));
                    } else {              
                    throw new Exception('Merci de créez votre poste');                    
                }           
                break; 
                
            case 'adminRegistration':                                     
                adminRegistration();
                break;

            case 'checkRegistration':
                if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['email2']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
                  checkRegistration($_POST['pseudo'], $_POST['email'],!empty($_POST['email2']), $_POST['password'],!empty($_POST['password2']));
                }else {
                  echo 'vous devez vraiment remplir tous les champs!';
                }
                break;

            case 'adminLogin':                          
                adminLogin();                 
                break;

            case 'checkUser':
                if (!empty($_POST['email']) && !empty($_POST['password'])) {
                  checkUser($_POST['email'], $_POST['password']);
                } else {
                  echo 'vous devez remplir tous les champs!';
                }              
                break;

            case 'adminLogout':
                adminLogout();
                break;

            default:
                echo 'Pas d\'action';
                break;            
        }
    } else {
        listPosts();
    }
  }
  catch (Exception $e)
  {
      die('Erreur : ' . $e->getMessage());
  }