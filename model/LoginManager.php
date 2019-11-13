<?php
session_start();
$_SESSION['email'];

require_once('model/Manager.php');

class LoginManager extends Manager
{
  public function login($email,$password)
  {
      $db = $this->dbconnect(); 
      $req = $db->prepare("SELECT * FROM member WHERE email= ?");
      $req->execute([$email]);
      $member = $req->fetch();   
      $isPasswordCorrect = password_verify($_POST['password'], $member['password']);
    
    if(!$member)
      {
        echo 'Mauvais identifiant ou mot de passe';
        } else
        {
          if($isPasswordCorrect)
          {
        /* session_start();
          $_SESSION['id'] = $member['id'];
          $_SESSION['email'] = $email;*/
          $_SESSION['email'] = $email;
          echo 'Vous êtes connecté !';
          getSignaledComments();      
            } else 
              {
              echo 'Mauvais identifiant ou mot de passe !';
              }
        }
  }
}