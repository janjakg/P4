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

function getSignalComment($signalled)
{
    $commentManager = new CommentManager();
    $flaggedComments = $commentManager->displayFlagComment($signalled);
    require('view/backend/adminView.php');
    
    if ($flaggedComments === false) {
        throw new Exception('post recupéré');
    } else {
        header('location:index.php?action=getSignalComment&id=' . $signalled);
    }  
}

function listComments()
{
    $commentManager = new CommentManager();
    $listComments = $commentManager->getListComments($commentId);

    if($listComments === false) {
      throw new Exception('Liste commentaire non à jour');
    }
    else {
      require('view/backend/adminView.php');   
    }
}


