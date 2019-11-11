<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/RegistrationManager.php');
require_once('model/LoginManager.php');

function getSignaledComments()
{
    $commentManager = new CommentManager();
    $signaledComments = $commentManager->getSignaledComments();
   
    if ($signaledComments === false) {
        throw new Exception('aucun commentaire signalé');
    } else {
      require('view/backend/adminIndex.php');
    }
}

function eraseComment($idComment)
{
  $commentManager = new CommentManager();
  $destroyComment = $commentManager->deleteComment($idComment);

  if($destroyComment === false) {
    throw new Exception('commentaire non supprimé');
  }
  else {
    require('view/backend/eraseComment.php');
  }
}

function saveComment($commentId)
{
  $commentManager = new CommentManager();
  $updateSignaledComment = $commentManager->retainComment($commentId);

  if($updateSignaledComment === false) {
    throw new Exception('commentaire non sauvegardé');
  }
  else {
    require('view/backend/saveComment.php');
  }
}

function postListing()
{
  $postManager = new PostManager();
  $posts = $postManager->getPosts();
  require('view/backend/adminCrud.php');
}

function erasePost($idPost)
{
  $postManager = new PostManager();
  $destroyPost = $postManager->deletePost($idPost);

  if($destroyPost === false) {
    throw new Exception('post non supprimé');
  }
  else {
    require('view/backend/erasePost.php');
  }
}

function readPost($postId)
{
  $postManager = new PostManager();
  $displayPost = $postManager->editPost($postId);

  if($displayPost === false) {
    throw new Exception('post non affiché');
  }
  else {
    require('view/backend/readPost.php');
  }
}

function updatePost($title, $content)
{
  $postManager =  new PostManager();
  $saveUpdate = $postManager->setUpdate($title, $content);

  if($saveUpdate === false) {
    throw new Exception('post non mis à jour');
  }
  else {
    require('view/backend/updatePost.php');
  }
}

function postUpdated($content)
{
  $postManager = new PostManager();
  $postModified = $postManager->modifyPost($content);

  if($postModified === false) {
    throw new exception('post no modifié');
  }
  else {
    require('view/backend/postUpdated.php');
  }
}

function createPost()
{
    $postManager = new PostManager();
    $postAdded = $postManager->addPost();   

    if ($postAdded === false) {
        throw new Exception('impossible d\ajouter le post!');
    } else {
      require('view/backend/createPost.php');
    }
    
}

function sendPost($title,$content)
{
  $postManager = new PostManager();
  $forward = $postManager->postSender($title,$content);

  if ($forward === false) {
    throw new Exception('impossible d\envoyer le post!');
  } else {
    require('view/backend/createInfo.php');
  }
}


function adminRegistration()
{      
    require('view/backend/adminRegistration.php');
}

function checkRegistration($pseudo, $email, $email2, $password, $password2)
{
  $registrationManager = new RegistrationManager();
  $registration = $registrationManager->register($pseudo, $email, $email2, $password, $password2);

  if($email == $email2 && $password == $password2) {
    echo'inscription réussie';
    require('view/backend/adminLogin.php'); 
  }else {
    throw new exception('Merci de revoir vos mots de passe ou emails');
  }
             
}

function adminLogin()
{   
    require('view/backend/adminLogin.php');  
}

function checkUser($email,$password)
{
  $loginManager = new LoginManager();
  $checkAdmin = $loginManager->login($email,$password);

  if ($email === 'jeanfor@gmail.com' && $password === 'alien') {
    //echo ' utilisateur ok';
    $commentManager = new CommentManager();
    $signaledComments = $commentManager->getSignaledComments();

    require('view/backend/adminIndex.php');
  } else {
    require('view/backend/adminLogin.php'); 
  }

}

function adminLogout()
{
  $registrationManager = new RegistrationManager();
  $disconnect = $registrationManager->logout();


  if($disconnect === false) {
    throw new Exception('logout impossible!');
  }else {
    require('view/backend/adminLogin.php');
  }
}