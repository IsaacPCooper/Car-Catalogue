<?php
 require "includes/header.php";
 ?>

<main>
  <!--header-->
  </header>
  <div align="center"class="header">
    <h1>Sign Up!</h1>
  </div>

<form method="post" action="includes/signup.inc.php">
  <!--First Name Input w/ Label-->
  <div class="container">
<div class="input-group">
  <label>First Name</label>
  <input type="text" name="UserFName" pattern="[A-Za-z ]+" title="Error! Letters only field" class="validate">
</div>
  <!--Second Name Input w/ Label-->
<div class="input-group">
  <label>Second Name</label>
  <input type="text" name="UserSName"  pattern="[A-Za-z ]+" title="Error! Letters only field" class="validate">
</div>
<!--Phone Input w/ Label-->
<div class="input-group">
<label>Phone Number</label>
<input type="text" name="UserPhone" pattern="[0-9]+" title="Error! Number only field" class="validate">
</div>
  <!--DOB Input w/ Label-->
<div class="input-group">
  <label>Date Of Birth</label>
  <input type="text" name="UserDOB" pattern="[0-9 /]+" title="Error!Numbers and / only field" class="validate">
</div>
  <!--Email Input w/ Label-->
<div class="input-group">
  <label>Email</label>
  <input type="text" name="UserEmail">
</div>
<!--Address Input w/ Label-->
<div class="input-group">
<label>Address</label>
<input type="text" name="UserAddress" pattern="[A-Za-z]+" title="Error! Letters only field" class="validate">
</div>
<!--Postcode Input w/ Label-->
<div class="input-group">
<label>Postcode</label>
<input type="text" name="UserPostcode">
</div>
  <!--Password input w/ Label-->
<div class="input-group">
  <label>Password</label>
  <input type="password" name="UserPwd">
</div>
  <!--Password repeat w/ Label-->
<div class="input-group">
  <label>Repeat Password</label>
  <input type="password" name="UserPwd-repeat">
</div>
<div align="center" class="input-group">
  <button type="submit" name="signup-submit" class="btn">Sign Up</button>
</div>
</div>
</form>
</main>

 <?php
 require"includes/footer.php";
  ?>
