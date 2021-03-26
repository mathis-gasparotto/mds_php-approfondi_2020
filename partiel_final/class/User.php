<?php
class User
{
  private $_login;
  private $_pass;


  public function __construct(string $login, string $pass)
  {
    $this->setLogin($login);
    $this->setPass($pass);
  }

  public function setLogin(string $login)
  {
    $this->_login = $login;
  }
  public function getLogin(): string
  {
    return $this->_login;
  }

  public function setPass(string $pass)
  {
    $this->_pass = $pass;
  }
  public function getPass(): string
  {
    return $this->_pass;
  }
}
