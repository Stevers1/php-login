<?php

class signupContr
{

  private $uid;
  private $pwd;
  private $pwdrepeat;
  private $email;

  public function __construct($uid, $pwd, $pwdrepeat, $email)
  {
    $this->$uid = $uid;
    $this->$pwd = $pwd;
    $this->$pwdrepeat = $pwdrepeat;
    $this->$email = $email;
  }

  private function emptyInput()
  {
    $result = false;
    if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function invalidUid()
  {
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function invalidEmail()
  {
    $result = false;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  private function pwdMatch()
  {
    if ($this->pwd !== $this->pwdrepeat) {
      return false;
    } else {
      return true;
    }
  }

}

?>