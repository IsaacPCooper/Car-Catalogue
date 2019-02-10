<?php
 require "includes/header.php";
 ?>

<main>
  <div class="container">
      <h1 align="center">Signup</h1>
      <form class="form-signup" action ="includes/signup.inc.php" method="post">
        <div class="row">
        <div class="col s6">
          <input type="text" name="UserFName" placeholder="First Name">
        </div>
        <div class="col s6">
          <input type="text" name="UserFName" placeholder="Last Name">
        </div>
      </div>
        <input type="text" name="UserDOB" placeholder="Date Of Birth: DD/MM/YYYY">
        <input type="text" name="UserEmail" placeholder="E-mail">
      <div class="row">
      <div class="col s6">
        <input type="password" name="UserPwd" placeholder="Password">
      </div>
      <div class="col s6">
        <input type="password" name="UserPwd-repeat" placeholder="Repeat Password">
      </div>
    </div>
        <div align="center">
          <button type = "submit" name = "signup-submit" id = "signup-submit">Sign Up</button>
        </div>
        </form>
  </div>
</main>

 <?php
 require "includes/footer.php";
  ?>
