<?php
 require "includes/header.php";
 ?>

<main>
  <!--header-->
  </header>
  <div align="center"class="header">
    <h1>Edit User Information</h1>
  </div>

<form method="post" action="includes/edituser.inc.php">
  <div class="container">
    <!--Adress Input w/ Label-->
  <div class="input-group">
    <label>Adress</label>
    <input type="text" name="editAddress">
  </div>
  <!--Postcode Input w/ Label-->
<div class="input-group">
  <label>Postcode</label>
  <input type="text" name="editPostcode">
</div>
  <!--Phone number w/ Label-->
<div class="input-group">
  <label>Phone Number</label>
  <input type="text" name="editPhone">
</div>
<!--DOB Input w/ Label-->
<div class="input-group">
<label>Date Of Birth</label>
<input type="text" name="editDOB">
</div>
<div align="center" class="input-group">
  <button type="submit" name="edit-user" class="btn">Edit Details</button>
</div>
</div>
</form>
</main>

 <?php
 require"includes/footer.php";
  ?>
