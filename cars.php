    <?php
     require "includes/header.php";
     include 'includes/dbConnect.php';
     session_start();
     //Checks if user is logged in
     if(!isset($_SESSION['UserID'])){
       header("Location:Login.php");
     }
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center">View our products</h1>
         <div class="carCard container">
         <form action="carsearch.php" method="post">
           <input type="text" name="search" placeholder="Search">
           <button type="submit" name="submit-search">Search</button>
         </div>
         </form>
           <div class="container" align="center">
             <?php
              $sql= "SELECT * FROM cars";
              $result = mysqli_query($conn,$sql);
              $queryResults = mysqli_num_rows($result);

              if($queryResults > 0){
                while($row = mysqli_fetch_assoc($result)) {
                   echo "<div>

                   <img src=".$row['carImg'].">
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
</main>
<!--Footer Start-->
<?php
require "includes/footer.php";
 ?>
</body>
 </html>


<!--ADD ISSET, ONLY ACESSED THROUGH BUTTON.-->
