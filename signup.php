<?php
 require "includes/header.php";
 ?>

<main>
  <div class="container">
      <h1 align="center">Signup</h1>
      <form class="form-signup" action ="includes/signup.inc.php" method="post">
          <input type="text" name="UserFName" placeholder="First Name">
          <input type="text" name="UserFName" placeholder="Last Name">
        <input type="text" name="UserDOB" placeholder="Date Of Birth: DD/MM/YYYY">
        <input type="text" name="UserEmail" placeholder="E-mail">
        <input type="password" name="UserPwd" placeholder="Password">
        <input type="password" name="UserPwd-repeat" placeholder="Repeat Password">
          <button type = "submit" name = "submit" id = "submit">Sign Up</button>
        </div>
        </form>
  </div>
</main>

 <?php
 require "includes/footer.php";
  ?>
