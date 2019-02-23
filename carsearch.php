<?php
 require "includes/header.php";
 include 'includes/dbConnect.php';
 session_start();
 $UserID = $_SESSION['UserID'];
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
     <form action="carsearch.php" method="POST">
       <input type="text" name="search" placeholder="Search">
       <button align="center" type="submit" name="submit-search">Search</button>
     </div>
     </form>
<div class="container" align="center">
<?php
$_SESSION['PSearch'] = $_POST['search'];
$id = $_SESSION['UserID'];
$keyword = $_POST['search'];

if (isset($_SESSION['UserID'])){
  $sql3 = "SELECT Searched, count(User_ID) FROM searches WHERE User_ID = UserID GROUP BY count(User_ID) LIMIT 3;"
  $output = mysqli_query($sql3,$conn);


if ($bigqueryResult > 1) {
  while($row = mysqli_fetch_assoc($bigresult)) {
     echo "<div>
     <h3>Favourite Searched</h3>
     <p>".$row['searched']."</p>
     </div>";
   }
  }



if (isset($_POST['submit-search'])){
  $search = mysqli_real_escape_string($conn,$_POST['search']);
  $sql = "SELECT * FROM cars WHERE carName LIKE '%$search%'OR carMake LIKE '%$search%'OR carYear LIKE '%$search%'OR carType LIKE '%$search%'OR carSize LIKE '%$search%' OR carFuel LIKE '%$search%'";
  $result = mysqli_query($conn ,$sql);
  $queryResult = mysqli_num_rows($result);

  $sql2 = "INSERT INTO searches (User_ID,Searched) VALUES (?,?)";
                     $stmt = mysqli_stmt_init($conn);
                     if (!mysqli_stmt_prepare($stmt, $sql2)) {
                       header("Location: ../carsearch.php?error=sqlerror01");
                       exit();
                     }
                     mysqli_stmt_bind_param($stmt, "ss",$id,$keyword);
                     mysqli_stmt_execute($stmt);

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
</main>
<?php
require "includes/footer.php";
 ?>
</body>
 </html>
