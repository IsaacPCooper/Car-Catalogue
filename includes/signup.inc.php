<?php
if(isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $UserFName = $_POST['UserFName'];
  $UserSName = $_POST['UserSName'];
  $UserDOB = $_POST['UserDOB'];
  $UserEmail = $_POST['UserEmail'];
  $UserPwd = $_POST['UserPwd'];
  $UserPwdRepeat = $_POST['UserPwd-repeat'];

  if(empty($UserFName) || empty($UserSName) || empty($UserDOB) ||empty ($UserEmail) || empty($UserPwd) || empty($UserPwdRepeat)) {
    header("Location: ../signup.php?error=emptyfields&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB."&mail".$UserEmail);
    exit();
  }

  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $UserFName) && !preg_match("/^[a-zA-Z]*$/", $UserSName))
  {
    header("Location: ../signup.php?error=invalidemail&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB);
    exit();
  }

  else if (!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)) {
    header("location: ../signup.php?error=invalidemail&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB);
    exit();
  }

  else if (!preg_match("/^[a-zA-Z]*$/",$UserFName)) {
    header("location: ../signup.php?error=invalidfname&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z]*$/",$UserSName)) {
    header("location: ../signup.php?error=invalidsname&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB);
    exit();
  }
  else if ($UserPwd !== $UserPwdRepeat) {
    header("location: ../signup.php?error=invalidsname&fname=".$UserFName."&sname".$UserSName."&DOB".$UserDOB);
    exit();
  }
  else {
    $sql = "SELECT UserEmail FROM users WHERE UserEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"s",$UserEmail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if($resultCheck > 0){
        header("location: ../signup.php?error=emailtaken");
        exit();
      }
      else {
        $sql = "INSERT INTO users FROM users(UserFName,UserSName,UserDOB,UserEmail,UserPwd) VALUES(?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($UserPwd,PASSWORD_DEFAULT)
          mysqli_stmt_bind_param($stmt,"sss",$UserFName,$UserSName,$UserDOB,$UserEmail,$hashedPwd);
          mysqli_stmt_execute($stmt);
          header("location: ../signup.php?signup=sucess");
          exit();

        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("location: ../signup.php");
}
