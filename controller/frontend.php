  
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
        header('Location: index.php?action=addComment&id=' . $postId);
    }
}

function signalledComment($commentId)
{
    $commentManager = new CommentManager();
    $updateComment = $commentManager->flagComments($commentId);
    
    if($updateComment === false) {
      throw new Exception('Post signalé! En attente de traitement');
    }
    else {
      header('Location: index.php?action=signalledComment&id=' . $commentId);    
    }
}

function adminConnect()
{
    $manager = new Manager();
    $code = $manager->getAdmConnect();
    require('view/frontend/adminLogin.php');
}
