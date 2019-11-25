<?php
require_once('model/Manager.php');

class RegistrationManager extends Manager
{
  public function register($pseudo, $email, $email2, $password, $password2)
  {
    $db = $this->dbconnect();  
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);   
    $req = $db->prepare("INSERT INTO member(pseudo, email, password) VALUES('$pseudo', '$email', '$password')");
    $registration = $req->execute([$pseudo, $email, $email2, $password, $password2]);
      
    return $registration;
  }

  public function logout()
  {
    $db = $this->dbconnect();
    $req = $db->prepare("UPDATE member SET email = '?', password ='?' WHERE email= '?'");   
    $disconnect = $req;

    return $disconnect;
  }
}