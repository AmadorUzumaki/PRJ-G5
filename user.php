<?php
class User
{
  public $username;
  private $email;
  private $password;
  private $rol;

  public function getUsername(){
    return $this->username;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }
  public function getRol(){
    return $this->rol;
}
  public function __construct($username,$email,$password,$rol)
{
$this->username=$username;
$this->email=$email;
$this->password=$password;
$this->rol=$rol;
}
}
?>
