<?php 
require_once('model/Manager.php');
class CommentManager extends Manager
{
  public function getComments($postId)
  {
      $db = $this-> dbConnect();
      $comments = $db-> prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
      $comments-> execute(array($postId));

      return $comments;
  }

  public function postComment($postId, $author, $comment)
  {
      $db =$this-> dbConnect();
      $comments = $db-> prepare('INSERT INTO comments(post_id, author, comment, comment_date, signalled) VALUES(?, ?, ?, NOW(), 0)');
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

 
  public function getSignalledComment()
  {
      $db = $this->dbConnect();
      $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signalled FROM comments WHERE signalled = 1');
      $signalledComment = $comments->execute();

      return $signalledComment;
  }

  public function getListComments($commentId)
  {
      $db = $this-> dbConnect();
      $comments = $db-> prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signalled FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
      $listComments = $comments -> execute(array($commentId));

      return $listComments;
  }

 }
