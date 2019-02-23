<?php
 require "includes/header.php";
 include 'includes/dbConnect.php';
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
if (isset($_post['submit-search'])){
  $search = mysqli_real_escape_string($conn,$_POST['search']);
$sql = "SELECT * FROM Cars WHERE carName LIKE '%$search%'
    OR carMake LIKE '%$search%'
    OR carYear LIKE '%$search%'
    OR carType LIKE '%$search%'
    OR carSize LIKE '%$search%'
    OR carFuel LIKE '%$search%'";
$result = mysqli_query($conn,$sql);
$queryResult = mysqli_num_rows($result);

if ($queryResult > 0) {
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
else {
  echo "There are no results matching your search!";
  }
}
 ?>
</div>