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
     
      return $member;    
  }
}