<?php
require_once('model/Manager.php');

class PostManager extends Manager
{
  public function getPosts()
  {
    $db = $this-> dbconnect();
    $req = $db-> query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    
    return $req;
  }

  public function getPost($postId)
  {
    $db = $this-> dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
  }

  public function addPost()
  {
    $db = $this->dbconnect();
    $req = $db->prepare('INSERT INTO posts(id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr) VALUES (?, ? , ?, NOW())');
    $postAdded = $req;
   
    return $postAdded;
  }

  public function deletePost($idPost)
  {
    $db = $this->dbconnect();
    $req = $db->prepare('DELETE FROM posts WHERE posts.id = ? ');
    $destroyPost = $req->execute(array($idPost));

    return $destroyPost;
  }

  public function editPost($postId)
  {
    $db = $this->dbconnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $displayPost = $req->fetch();

    return $displayPost;
  }
}
