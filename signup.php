<?php
 require "header.php";
 ?>

<main>
  <body>
  <div class="container">
      <h1 align="center">Signup</h1>
      <form action ="includes/signup.inc.php" method="post">
        <div class="row">
        <div class="col m6"><input type="text" name="fname" placeholder="First Name"></div>
        <div class="col m6"><input type="text" name="sname" placeholder="Last Name"></div>
      </div>
        <input type="text" name="fname" placeholder="Date Of Birth: DD/MM/YYYY">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button align="center" type="submit" name="signup-submit">Sign Up</button>
      </form>
  </div>
</body>
</main>

 <?php
 require "footer.php";
  ?>
