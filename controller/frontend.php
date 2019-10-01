<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
  $postManager = new PostManager();
  $posts = $postManager->getPosts();

  require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');      
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager(); 
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
       
    if ($affectedLines === false) {
       throw new Exception('Impossible d\'ajouter le commentaire !');
        
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function addPost($title, $content)
{
    $postManager = new PostManager();

    $postAdded = $postManager->createPost($title, $content);
    require('view/frontend/adminView.php');
    
    if($postAdded === false) {
      throw new Exception('impossible d\ajouter le post!');
    }
    else {
      header('Location: index.php?action=title&id=' . $postId);
    }
}

function signalComment($commentId)
{
  $commentManager = new CommentManager();
  $updateComment = $commentManager->flagComments($commentId);

  if($updateComment === false) {
    throw new Exception('Post signalé! En attente de traitement');
  }
  else {
    header('Location: index.php?action=post&id=' . $commentid);    
  }
}

function getSignalComment($signalled) 
{
  $commentManager = new CommentManager();
  $flaggedCom = $commentManager->getFlagComment($signalled);

  if($flaggedCom === false) {
    throw new Exception('post recupéré');
  }
  else{
    header('location:adminView.php?action=post&id=' . $signalled);
  }

  require('view/frontend/adminView.php');

}