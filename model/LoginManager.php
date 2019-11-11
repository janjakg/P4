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

   /* if($member>0) 
    {

if(password_verify($password,$member[0]))
{
  echo'connexion ok';
}
    }
    else
    {
      echo 'Mauvais identifiant ou mot de passe, merci de revoir!';
    }*/
    /*if(!$member){
      echo 'Mauvais identifiant ou mot de passe';
    } else
     {
     if($isPasswordCorrect) {
       session_start();
      // $_SESSION['id'] = $member['id'];
//$_SESSION['pseudo'] = $pseudo;
       echo'Vous etes connecté!';
     }
     else{
      echo 'Mauvais identif ou mot d passe!';
      
     }
    } */ 
       
  }

}