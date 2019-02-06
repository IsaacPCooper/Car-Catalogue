<?php
 require "header.php";
 ?>

<main>
  <body>
  <div class="container">
      <h1 align="center">Signup</h1>
      <form action ="includes/signup.inc.php" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="sname" placeholder="Last Name">
        <input type="date" name="fname" placeholder="Date Of Birth: DD/MM/YYYY">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit">Sign Up</button>
      </form>
  </div>
</body>
</main>

 <?php
 require "footer.php";
  ?>
