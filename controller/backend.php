<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function addPost($title, $content)
{
    $postManager = new PostManager();
    $postAdded = $postManager->createPost($title, $content);
    require('view/backend/adminView.php');

    if ($postAdded === false) {
        throw new Exception('impossible d\ajouter le post!');
    } else {
        header('Location: index.php?action=title&id=' . $postId);
    }
}

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
  $commentManger = new CommentManager();
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





