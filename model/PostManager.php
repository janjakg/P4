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

  public function deletePost($idComment, $idPost)
  {
    $db = $this->dbconnect();
    $req = $db->prepare('DELETE FROM comments WHERE comment = ?, post_id = ?');
    $destroyPost = $req->execute(array($idComment, $idPost));

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

  public function setUpdate()
  {
    $db = $this->dbconnect();
    $req = $db->prepare("UPDATE posts SET title = '?', content = '?' WHERE posts.id ='?'");
    $saveUpdate = $req->execute();

    return $saveUpdate;
  } 

  public function modifyPost($idPost, $title, $content)
  {
    $db = $this->dbconnect();    
   // $req = $db->prepare("UPDATE posts SET title = '$title' ,content = '$content' WHERE posts.id = '$idPost' ");
//$postModified = $req->execute([$_GET['idPost'], $_POST['title'], $_POST['content']]);
    $req = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :idPost');
    $postModified = $req->execute([
      'id' => $idPost,
      'title' => $title,
      'content' => $content,
    ]);

    return $postModified;
  }
  
  public function addPost()
  {
    $db = $this->dbconnect();
    $req = $db->prepare("INSERT INTO posts( title, content) VALUES ('?','?' )");
    $postAdded = $req;
   
    return $postAdded;
  }

  public function postSender($title,$content)
  {
    $db = $this->dbconnect();
    $req = $db->prepare("INSERT INTO posts( title, content) VALUES ('$title', '$content')");
    $forward = $req->execute([$title,$content]);

    return $forward;
  }
  
}
