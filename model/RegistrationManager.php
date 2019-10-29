<?php
require_once('model/Manager.php');

class RegistrationManager extends Manager
{
  public function register($pseudo, $email, $password)
  {
    $db = $this->dbconnect();   
    $req = $db->prepare("INSERT INTO member(pseudo, email, password) VALUES('$pseudo', '$email', '$password')");
    $registration = $req->execute([$pseudo, $email, $password]);

    return $registration;
  }

  public function login()
  {
    $db = $this->dbconnect(); 
    $req = $db->prepare("SELECT email, password FROM member WHERE email = '?'");
    $log = $req->execute();

    return $log;
  }
}