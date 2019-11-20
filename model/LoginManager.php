<?php

require_once('model/Manager.php');

class LoginManager extends Manager
{
  public function login($email,$password)
  {
      $db = $this->dbconnect(); 
      $req = $db->prepare("SELECT * FROM member WHERE email= ?");      
      $req->execute([$email]);
      $member = $req->fetch();  
      $password = password_verify($_POST['password'], $member['password']); 
      //$isPasswordCorrect = password_verify($_POST['password'], $member['password']);

      return $member;
    
    /*if(!$member)
      {
        echo 'Mauvais identifiant ou mot de passe';
        } else
        {
          if($isPasswordCorrect) 
          { 
          //session_start();
          $_SESSION['pseudo'] = $member['pseudo'];     
          $_SESSION['email'] = $email;
          echo 'Bonjour '. $_SESSION['pseudo'] . ' vous êtes connecté !';
         getSignaledComments();  
          exit();
            } else 
              {
              echo 'Mauvais identifiant ou mot de passe !';             
              }
        }*/
  }
}