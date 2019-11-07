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

  public function setUpdate( $title, $content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare("UPDATE posts SET title = '?', content = '?' WHERE posts.id ='?'");
    $saveUpdate = $req->execute([$title, $content]);

    return $saveUpdate;
  } 

  public function modifyPost($content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare("UPDATE posts SET content = '$content' WHERE posts.id = '?' ");
    $postModified = $req->execute($content);

    return $postModified;
  }
  
  public function addPost($title, $content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare("INSERT INTO posts( title, content) VALUES ('?','?' )");
    $postAdded = $req->execute([$title, $content]);
   
    return $postAdded;
  }

  /*public function postSender($title,$content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare("INSERT INTO posts( title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr) VALUES (' ?' , '?', NOW())");
    $forward = $req->execute([$title,$content]);

    return $forward;
  }*/
  
}
