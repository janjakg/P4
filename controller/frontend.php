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
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
    require('view/frontend/postView.php');
}
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
<<<<<<< HEAD
    if ($affectedLines === false) {
       throw new Exception('Impossible d\'ajouter le commentaire !');
=======

    if ($affectedLines === false) {
       throw new Exception('Impossible d\'ajouter le commentaire !');

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
function signalledComment($commentId)
{
    $commentManager = new CommentManager();
    $updateComment = $commentManager->signalledComments($commentId);
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
    if($updateComment === false) {
      throw new Exception('Problème dans la mise à jour');
    }
    else {
        require('view/frontend/signalledComment.php');
    }
}

