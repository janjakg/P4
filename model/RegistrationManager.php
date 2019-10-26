<?php
require_once('model/Manager.php');

class RegistrationManager extends Manager
{
  public function register($pseudo, $email, $password)
  {
    $db = $this->dbconnect();   
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $req = $db->prepare("INSERT INTO members(pseudo, email, password) VALUES('$pseudo', '$email', '$password')");
    $registration = $req->execute([$pseudo, $email, $password]);

    return $registration;
  }

  public function login()
  {
    $db = $this->dbconnect(); 
    $req = $db->prepare('SELECT * FROM members WHERE password = ?');
    $log = $req;

    return $log;
  }
}