<?php
if (isset($_POST['signup-submit'])) {

  require 'dbConnect.php';

  $UserFName = $_POST['UserFName'];
  $UserSName = $_POST['UserSName'];
  $UserPhone = $_POST['UserPhone'];
  $UserDOB = $_POST['UserDOB'];
  $UserEmail = $_POST['UserEmail'];
  $UserAddress = $_POST['UserAddress'];
  $UserPostcode = $_POST['UserPostcode'];
  $UserPwd = $_POST['UserPwd'];
  $UserPwdRepeat = $_POST['UserPwd-repeat'];

  //Empty Check!
  if (empty($UserFName) || empty($UserSName) || empty($UserPhone) ||empty($UserDOB) || empty($UserEmail) || empty($UserAddress) || empty($UserPostcode) ||empty($UserPwd) || empty($UserPwdRepeat))
  {
    header("Location: ../signup.php?error=emptyfields&UserFName=".$UserFName."&UserSName".$UserSName."&UserPhone".$UserPhone."&UserDOB".$UserDOB."&UserEmail".$UserEmail."&UserAddress".$UserAddress."&UserPostcode".$UserPostcode);
    exit();
  }
  //Email Validation
  else if (!filter_var($UserEmail,FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidUserEmail&UserFName=".$UserFName."&UserSName".$UserSName."&UserPhone".$UserPhone."&UserDOB".$UserDOB."&UserAddress".$UserAddress."&UserPostcode".$UserPostcode);
    exit();
  }
  //Name Checking
  else if (!preg_match("/^[a-zA-Z]*$/",$UserFName)) {
    header("Location: ../signup.php?error=invalidUserFName");
    exit();
  }
  //Password Checking
  else if ($UserPwd !== $UserPwdRepeat) {
    header("Location: ../signup.php?error=InvalidUserPwd&UserFName=".$UserFName."&UserSName".$UserSName."&UserDOB".$UserDOB);
    exit();
  }
  //Email Checking vs DB Emails
  else {
    $sql = "SELECT UserEmail FROM users WHERE UserEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"s", $UserEmail);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&UserFName=".$UserFName);
        exit();
      }
      //INSERT INTO DB
      else{
        $sql = "INSERT INTO users (UserFName,UserSName,UserPhone,UserDOB,UserEmail,UserAddress,UserPostcode,UserPwd) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($UserPwd,PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt,"ssssssss",$UserFName,$UserSName,$UserPhone,$UserDOB,$UserEmail,$UserAddress,$UserPostcode,$hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          exit();
        }

      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else{
  header("Location: ../signup.php");
  exit();
}
?>
