    <?php
     require "includes/header.php";
     $id = $_SESSION['UserID'];
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center"> Top cars, Top Prices! </h1>
         <div align="center" class="container">
           <img align ="center" width="50% "height="50%" src="assets/img/money.jpeg">
      <?php
           if (isset($_SESSION['UserID'])) {
             $fav= "SELECT * FROM searches WHERE User_ID = $id GROUP BY Searched ORDER by COUNT(*) Desc limit 1";
             $result = mysqli_query($conn, $fav);
             $datas = array();
           if ($result):
             if (mysqli_num_rows($result) > 0):
              while ($row = mysqli_fetch_assoc($result)):
                $datas[] = $row;
                foreach ($datas as $data){
                  echo $data['Searched'];
                  echo"<br>";
                  echo "<h3> You are Logged In! </h3>";
                  echo "<h4> Welcome, ".$_SESSION['UserFName']." !</h4>";
           }
          // else {
             //echo "<h3> Please Log In to Continue </h3>";
          // }

endwhile;
endif;
endif;
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
