<?php
//Check if user clicked button
if (isset($_POST['login-submit'])) {
    require 'dbConnect.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
//empty field checks
  if empty($mailuid) || empty($password))
  {
    header("Location:../login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE UserEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header("Location:../login.php?error=sqlerror");
      exit();
    }
    else {


      mysqli_stmt_bind_param($stmt,"ss", $mailuid,$mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password,$row['UserPwd']);
        if ($pwdCheck == false) {
          header("Location:../login.php?error=wrongcredentials");
          exit();
        }
        else if($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['UserFName'] = $row['UserFName'];
          $_SESSION['UserSName'] = $row['UserSName'];
          header("Location:../login.php?login=success");
          exit();
        }
        else {

        }
      }

      else {
        header("Location:../login.php?error=nouser");
        exit();
      }

    }

  }
}
//if not, kick them back to login.php
else {
  header("Location: ../login.php");
  exit();
}
