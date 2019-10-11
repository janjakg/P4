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
      require('view/backend/listComments.php');
    }  
}

function eraseComment($commentId)
{
  $commentManager = new CommentManager();
  $destroyComment = $commentManager-> deleteComment($commentId);

  if($destroyComment === false) {
    throw new Exception('commentaire non supprimé');
  }
  else {
    require('index.php?action=eraseComment&id=' . $commentId);
  }
}



