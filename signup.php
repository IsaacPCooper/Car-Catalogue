<?php
 require "includes/header.php";
 ?>

<main>
  <div class="container">
      <h1 align="center">Signup</h1>
      <form action ="includes/signup.inc.php" method="post">
        <div class="row">
        <div class="col s6">
          <input type="text" name="fname" placeholder="First Name">
        </div>
        <div class="col s6">
          <input type="text" name="sname" placeholder="Last Name">
        </div>
      </div>
        <input type="text" name="DOB" placeholder="Date Of Birth: DD/MM/YYYY">
        <input type="text" name="mail" placeholder="E-mail">
      <div class="row">
      <div class="col s6">
        <input type="password" name="pwd" placeholder="Password">
      </div>
      <div class="col s6">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
      </div>
    </div>
        <div align="center">
          <button class="button" type="submit" name="signupBtn" value="signupBtn">Sign Up</button>
        </div>
  </div>
  </form>
</main>

 <?php
 require "includes/footer.php";
  ?>
