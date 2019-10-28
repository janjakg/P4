<?php
require_once('model/Manager.php');
class CommentManager extends Manager
{
  public function getComments($postId)
  {
      $db = $this->dbConnect();
      $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date_fr, signalled FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
      $req->execute([$postId]);
      $comments = $req->fetchAll();
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
      return $comments;
  }
  public function postComment($postId, $author, $comment)
  {
      $db =$this->dbConnect();
      $req = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, signalled) VALUES(?, ?, ?, NOW(), 0)');
      $affectedLines = $req->execute([$postId, $author, $comment]);
<<<<<<< HEAD
      return $affectedLines;
  }
=======

      return $affectedLines;
  }


>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
  public function signalledComments($commentId)
  {
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE comments SET signalled = 1 WHERE comments.id = ?');
      $updateComment = $req->execute([$commentId]);
<<<<<<< HEAD
      return $updateComment;
  }
=======

      return $updateComment;
  }


>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
  public function getSignaledComments()
  {
      $db = $this->dbConnect();
      $signaledComments = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signalled FROM comments WHERE signalled = 1');
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
      return $signaledComments;
  }
  public function deleteComment($idComment)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('DELETE FROM comments WHERE comments.id = ?');
    $destroyComment = $req->execute([$idComment]);
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
    return $destroyComment;
  }
  public function retainComment($commentId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare('UPDATE comments SET signalled = 0 WHERE comments.id = ?');
    $updateSignaledComment = $req->execute([$commentId]);
<<<<<<< HEAD
=======

>>>>>>> ecaeca1a0ebe1323be5322d10c6a84039eabd4a8
    return $updateSignaledComment;
  }
 }