    <?php
     require "includes/header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center"> Top cars, Top Prices! </h1>
         <div class="container">
           <img class="responsive-img"src="assets/img/money.jpeg"
    <div align="center">
      <?php
           if (isset($_SESSION['UserFName'])) {
             echo '<p> You are Logged In! </p>';
           }
           else {
              echo '<p> You are Logged out! </p>';
           }
           ?>
</div>
  </div>

</main>
<!--Footer Start-->
<?php
require "includes/footer.php";
 ?>
</body>
 </html>
