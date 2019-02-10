!--FINISH ME--!

<?php
if(is set($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $UserFName = $_POST['UserFName'];
  $UserSName = $_POST['UserSName'];
  $UserDOB = $_POST['UserDOB'];
  $UserEmail = $_POST['UserEmail'];
  $UserPwd = $_POST['UserPwd'];
  $UserPwdRepeat = $_POST['UserPwd-repeat'];

  if(empty($firstName) || empty($secondName)) || empty($DOB) || empty($email) || empty($password) {
    header("Location: ../signup.php?error=emptyfields&UserFName=".$UserFName."&UserSName".$UserSName."&UserDOB".$UserDOB."&UserEmail".$UserEmail);
    exit();
  }
  }

}
