<?php
require_once('model/Manager.php');

class RegistrationManager extends Manager
{
  public function register($pseudo, $email, $password)
  {
    $db = $this->dbconnect();
    $req = $db->prepare('INSERT INTO members(pseudo, email, password) VALUES(?, ?, ?)');
    $registration = $req->execute([$pseudo, $email, $password]);

    return $registration;
  }
}