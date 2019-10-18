<?php 
require_once('model/Manager.php');
class CommentManager extends Manager
{
  public function getComments($postId)
  {
      $db = $this->dbConnect();
      $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date_fr, signalled FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
      $comments->execute(array($postId));
      $comments->fetch();

      return $comments;
  }

  public function postComment($postId, $author, $comment)
  {
      $db =$this->dbConnect();
      $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, signalled) VALUES(?, ?, ?, NOW(), 0)');
      $affectedLines = $comments->execute(array($postId, $author, $comment));

      return $affectedLines;
  }

  
  public function signalledComments($commentId)
  {
      $db = $this->dbConnect();
      $comments = $db->prepare('UPDATE comments SET signalled = 1 WHERE comments.id = ?');
      $updateComment = $comments->execute(array($commentId));

      return $updateComment;
  }

 
  public function getSignaledComments()
  {
      $db = $this->dbConnect();
      $signaledComments = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date_fr, signalled FROM comments WHERE signalled = 1');
      
      return $signaledComments;
  }

  public function deleteComment($idComment)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('DELETE FROM comments WHERE comments.id = ?');
    $destroyComment = $comments->execute(array($idComment));

    return $destroyComment;

  }

  public function retainComment($commentId)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('UPDATE comments SET signalled = 0 WHERE comments.id = ?');
    $updateSignaledComment = $comments->execute(array($commentId));

    return $updateSignaledComment;   
  }

 }
