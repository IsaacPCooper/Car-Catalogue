<?php
 require "header.php";
 ?>

<main>
  <div>
    <section class = "section-default">
      <h1>Signup</h1>
      <form action ="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail"> 
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
      </form>
    </section>
  </div>

</main>

 <?php
 require "footer.php";
  ?>
