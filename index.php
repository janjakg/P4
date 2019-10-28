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
            if(isset($_POST['title']) && isset($_POST['content'])) {
              if(!empty($_POST['title']) && !empty($_POST['content'])) {
                createPost($_POST['title'], $_POST['content']);
              } else{
                echo 'test';
              }  
            }      
            
                break;

            case 'sendPost' :           
             if(isset($_GET['postId']) && $_GET['postId'] > 0) {
               sendPost($postId);
             } else {
              throw new Exception('pas de post créé pour la bdd');
            }           
                break;

            case 'updatePost' :
                if(isset($_GET['idPost'])  && $_GET['title'] && $_GET['content']> 0) {
                  updatePost($_GET['idPost'], $_GET['title'],$_GET['content']);
                }else {
                  throw new Exception('aucun identifiant de mise à jour affiché');
                }
                break;

            //case 'adminRegistration' :  
            //if(isset($_GET['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
             // adminRegistration($pseudo, $email, $password);
            //}           
            
              
               
                                 
                  /*if(!empty($_POST['pseudo'])&& !empty($_POST['email']) && !empty($_POST['email2']) && !empty($_POST['password']) && !empty($_POST['password2']))
                  {
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $email = htmlspecialchars($_POST['email']);
                    $email2 = htmlspecialchars($_POST['email2']);
                    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $password2 = password_hash($_POST['password'],PASSWORD_DEFAULT);

                    $pseudolength = strlen($pseudo);
                    if($pseudolength <= 255) 
                    {
                      if($email == $email2)
                      {
                        if($password == $password2)
                        {
                          echo('parfait pour l\'inscription');
                        }
                      }else{
                        throw new Exception('Vos adresses email ne correspondent pas!');
                      }                
                    }else{
                      throw new Exception('votre pseudo ne doit pas excéder 255 caractères!');
                    }
                  }else{
                    throw new Exception ('Tous les champs doivent etre remplis');
                  }*/
         
                //break;
           
            case 'adminLogin' :            
             adminLogin();                     
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