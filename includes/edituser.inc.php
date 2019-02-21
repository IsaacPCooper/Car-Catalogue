<?php
session_start();
if (isset($_POST['edit-user'])){
  require 'dbConnect.php';
  
  $UserID = $_SESSION['UserID'];
  $address = $_POST['editAddress'];
  $postcode = $_POST['editPostcode'];
  $phone = $_POST['editPhone'];
  $dob = $_POST['editDOB'];

  if (empty($address) || empty($postcode) || empty($dob) || empty($phone)){
      header("Location: ../edituser.php?error=emptyfields&name=".$name."&address".$address."&postcode".$postcode."&email".$email);
      exit();
    }
  else if (!preg_match("/^[0-9]*$/", $dob)){
    header("Location: ../edituser.php?error=incorrectdob");
    exit();
  }
    else if (!preg_match("/^[0-9]*$/",$phone)){
      header("Location: ../edituser.php?error=incorrectphone");
      exit();
    }
    else {
      $sql = "UPDATE users SET UserAddress = ?, UserPostcode = ?, UserDOB = ? , UserPhone = ? WHERE idUsers = $UserID";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../edituser.php?error=SQLError&".$uID);
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ssss", $address, $postcode, $dob, $phone);
        mysqli_stmt_execute($stmt);
        header("Location: ../edituser.php?edit=success");
        exit();
      }



    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
  header("Location: ../edituser.php");
}






?>
