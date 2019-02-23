<?php
 require "includes/header.php";
 include 'includes/dbConnect.php';
 session_start();
 //Checks if user is logged in
 if(!isset($_SESSION['UserID'])){
   header("Location:Login.php");
 ?>
   <!--Navbar end-->
   <!--First Paragraph Begin-->
   <main>
     <body>
     <h1 align="center">View our products</h1>
     <div class="carCard container">
     <form action="carsearch.php" method="POST">
       <input type="text" name="search" placeholder="Search">
       <button type="submit" name="submit-search">Search</button>
       <button type='submit' name='favourite-search'>Favourite!</button>
     </div>
     </form>
<div class="container" align="center">
<?php
if (isset($_POST['submit-search'])){
  $search = mysqli_real_escape_string($conn,$_POST['search']);
  $sql = "SELECT * FROM cars WHERE carName LIKE '%$search%'OR carMake LIKE '%$search%'OR carYear LIKE '%$search%'OR carType LIKE '%$search%'OR carSize LIKE '%$search%' OR carFuel LIKE '%$search%'";
  $sql2 = "INSERT INTO users(UserPSearches) VALUES(['search'])";
  $_SESSION['PSearch'] = ['search']
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
if (isset($_POST['favourite-search'])){
  $sql3 = "INSERT INTO users(UserFSearch) VALUES($_SESSION['PSearch'])";
}
 ?>
</div>
