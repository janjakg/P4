<?php
require('controller/frontend.php');

try {
  //test du paramètre action pour savoir quel controlleur appeler. Ici listposts
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
//appel du controlleur post, recupération des posts ajoutés
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';            
        }

    }
    // ajout de commentaire
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
    //signalement des commentaires 
    else if(isset($_GET['action'])  == 'signalComment') {
      if(isset($_GET['id']) && $_GET['id'] >0) {
        signalComment($_GET['id']);
        echo 'Commentaire signalé! En attente de traitement'; 
      }
     
        }     
        else {
          echo 'le post n\'a pas été signalé!';
        }          
                 
    }
    //appel du controller addPost, ajout de posts
    else if(isset( $_POST['action']) == 'addPost') {
      if(isset($_GET['id']) && $_GET['id']>0) {
        if (!empty($_GET['title']) && !empty($_GET['content']));{
          addPost($title, $content);  
        }
      }           
      else{
        echo 'post non envoyé';
      }   
    }
// récupération de commentaires signalés
    else if(isset( $_GET['action']) =='getSignalComment') {
      if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "alien"){
        getSignalComment($signalled);
      } 
         else{
           echo 'Mot de passe incorrect';          
         } 
       
     }
    

    else {
  //Par défaut on charge la liste des derniers billets
    listPosts();
    }
  } catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
  }

