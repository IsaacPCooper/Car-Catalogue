<?php
if (isset($_POST['signup-submit'])){

require 'dbh.inc.php';

$UserFName = $_POST['fname'];
$UserSName = $_POST['sname'];
$UserDOB = $_POST['DOB'];
$UserEmail = $_POST['mail'];
$UserPwd = $_POST['pwd'];
$UserPwdRepeat = $_POST['pwd-repeat'];

if(empty($UserFName)||empty($UserSName)||empty($UserDOB)||empty($UserEmail)||empty($UserPwd)||empty($UserPwdRepeat)) {
  header("Location: ../signup.php?error=emptyfields&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB"&mail=".$UserEmail);
  exit();
  }
  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/",$UserFName) && !preg_match("/^[a-zA-Z]*$/",$UserSName))) {
  header("Location: ../signup.php?error=invalidemail&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidemail&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }

  else if (!preg_match("/^[a-zA-Z]*$/",$UserFName)) {
    header("Location: ../signup.php?error=invalidfname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if (!preg_match("/^[a-zA-Z]*$/",$UserSName)) {
    header("Location: ../signup.php?error=invalidsname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if ($UserPwd !== $UserPwdRepeat) {
    header("Location: ../signup.php?error=invalidsname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else {
    $sql = "SELECT UserEmail FROM users WHERE UserEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"s");
    }
  }
}
