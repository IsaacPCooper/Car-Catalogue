    <?php
     require "includes/header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center">View our products</h1>
         <form action="search.php" method="post">
           <input type="text" name="search" placeholder="Search">
           <button type="submit" name="submit-search">Search</button>
           <div class="container">
             <?php
              $sql= "SELECT * FROM Cars";
              $result = mysqli_quey($conn,$sql);
              $queryResults = mysqli_num_rows($result);

              if($queryResults > 0){
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<div>
                   <h3>".$row['carMake']."</h3>
                   <p>".$row['carName']."</p>
                   <p>".$row['carYear']."</p>
                   <p>".$row['carType']."</p>
                   <p>".$row['carSize']."</p>
                   <p>".$row['carFuel']."</p>
                   </div>";
                }
              }

             ?>
           </div>
         <div class="container">
     <div class="carousel carousel-slider">
    <a class="carousel-item responsive-img"><img src="assets/img/car_1.png"></a>
    <a class="carousel-item responsive-img"><img src="assets/img/car_1.png"></a>
    <a class="carousel-item responsive-img"><img src="assets/img/car_1.png"></a>
    <a class="carousel-item responsive-img"><img src="assets/img/car_1.png"></a>
  </div>
</div>
</main>
<!--Footer Start-->
<?php
require "includes/footer.php";
 ?>
</body>
 </html>


<!--ADD ISSET, ONLY ACESSED THROUGH BUTTON.-->
