<?php
 require "includes/header.php";
 ?>

<main>
  <!--header-->
  </header>
  <div align="center"class="header">
    <h1>Log in</h1>
    
  </div>

<form method="post" action="includes/login.inc.php">
  <!--Email w/ Label-->
  <div class="container">
    <div class="input-group">
      <label>Email</label>
      <input type="text" name="mailuid">
    </div>
  <!--Password input w/ Label-->
<div class="input-group">
  <label>Password</label>
  <input type="password" name="pwd">
</div>
<div align="center" class="input-group">
  <button type="submit"name="login-submit"class="btn">Log In</button>
</div>
</div>
</form>
</main>

 <?php
 require"includes/footer.php";
  ?>
