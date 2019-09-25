<?php
class PostManager 
{
  public function getPosts()
  {
    $db = $this-> dbconnect();
    $req = $db-> query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    
    return $req;
  }

  public function getPost($postId)
  {
    $db = $this-> dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
  }

  public function createPost($title, $content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare('INSERT TO posts(id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr) VALUES (?, ? , ?, NOW())');
    $req->execute(array($title, $content));
    $postAdded = $post = $req->fetch();

    return $postAdded;
  }



  private function dbConnect()
  {
    $db = new PDO('mysql:host=localhost;dbname=blogp4;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
  }

  

}
