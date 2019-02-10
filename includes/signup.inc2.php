<?php
if(isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $firstName = $_POST['fname'];
  $secondName = $_POST['sname'];
  $DOB = $_POST['DOB'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  if(empty($firstName) || empty($secondName)) || empty($DOB) || empty($email) || empty($password)

}
