<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/RegistrationManager.php');

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
  
    require('view/backend/saveComment.php'); 
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

function updatePost($idPost)
{
  $postManager =  new PostManager();
  $saveUpdate = $postManager->setUpdate($idPost);

  if($saveUpdate === false) {
    throw new Exception('post non mis à jour');
  }
  else {
    require('view/backend/updatePost.php');
  }
}

function createPost($title, $content)
{
    $postManager = new PostManager();
    $postAdded = $postManager->addPost($title,$content);   

    if ($postAdded === false) {
        throw new Exception('impossible d\ajouter le post!');
    } else {
      require('view/backend/createPost.php');
    }
}

function adminRegistration($pseudo, $email, $password)
{
    $registrationManager = new RegistrationManager();
    $registration = $registrationManager->register($pseudo, $email, $password);     
    
    if ($registration === false) {
      throw new Exception('inscription impossible!');
  } else {
    require('view/backend/adminRegistration.php');
  }
}

function adminLogin()
{
  $registrationManager = new RegistrationManager();
  $log = $registrationManager->login();

  if($log === false) {
    throw new Exception('login impossible!');
  }else {
    require('view/backend/adminLogin.php');
  }
}





