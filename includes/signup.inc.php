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
  header("Location: ./signup.php?error=emptyfields&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB"&mail=".$UserEmail);
  exit();
  }
  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/",$UserFName) && !preg_match("/^[a-zA-Z]*$/",$UserSName))) {
  header("Location: ./signup.php?error=invalidemail&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ./signup.php?error=invalidemail&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }

  else if (!preg_match("/^[a-zA-Z]*$/",$UserFName)) {
    header("Location: ./signup.php?error=invalidfname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if (!preg_match("/^[a-zA-Z]*$/",$UserSName)) {
    header("Location: ./signup.php?error=invalidsname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else if ($UserPwd !== $UserPwdRepeat) {
    header("Location: ./signup.php?error=invalidsname&fname=".$UserFName."&sname=".$UserSName"&DOB=".$UserDOB);
  }
  else {
    $sql = "SELECT UserEmail FROM users WHERE UserEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ./signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"s",$UserEmail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
        header("Location: ./signup.php?error=emailtaken");
        exit();
      }
      else {
        $sql = "INSERT INTO users FROM users(UserFName,UserSName,UserDOB,UserEmail,UserPwd) VALUES(?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ./signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($UserPwd,PASSWORD_DEFAULT)
          mysqli_stmt_bind_param($stmt,"sss",$UserFName,$UserSName,$UserDOB,$UserEmail);
          mysqli_stmt_execute($stmt);
          header("Location: ./signup.php?error=sqlerror");
          exit();

        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ./signup.php");
}