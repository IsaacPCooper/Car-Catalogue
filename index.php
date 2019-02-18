    <?php
     require "includes/header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center"> Top cars, Top Prices! </h1>
         <div class="container">
     <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    </div>
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
