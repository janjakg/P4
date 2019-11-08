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
    $isPasswordCorrect = password_verify($_POST['password'], $member['password']);

    if(!$member){
      echo 'Mauvais identifiant ou mot d passe';
    } else
     {
     if($isPasswordCorrect) {
       session_start();
      // $_SESSION['id'] = $member['id'];
//$_SESSION['pseudo'] = $pseudo;
       echo'Vous etes connecté!';
     }
     else{
      echo 'Mauvais identifiant ou mot d passe!';
      
     }
    }  
       
  }

}

