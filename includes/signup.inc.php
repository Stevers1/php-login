<?php

if (isset($_POST["submit"])) {

  //Grabbing data

  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdreapeat = $_POST["pwdreapeat"];
  $email = $_POST["email"];

  // Instantiate SignupContr class

  include "../classes/signup.classes.php";
  include "../classes/signup-contr.classes.php";
  $signup = new signupContr($uid, $pwd, $pwdrepeat, $email);

  //Running error handlers and user signup

  //Going to back to front page
}