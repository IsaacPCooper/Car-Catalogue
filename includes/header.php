<?php
session_start();
?>
<!DOCTYPE html>
 <html>
   <head>
     <title>JPA Cars Web</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Import Google Font(s)-->
     <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200 ,700" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--Import MyStyleSheet-->
     <link type="text/css" rel="stylesheet" href="css/myStyleSheet.css">
     <!--Icon-->
     <link rel="icon" href="favicon.ico" type="image/x-icon"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script type="text/javascript" src="js/myjs.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/materialize.js"></script>
     <script type="text/javascript" language="javascript">
          $( document ).ready(function(){

              $(".button-collapse").sideNav();//mobile screen menu init

              $('.carousel').carousel(); //carousel init

              $('.carousel-slider').slider({full_width: true});//slider init
          });
      </script>
   </head>

     <!--Import jQuery before materialize.js-->
     <!--Navbar-->
     <body class = "ibg gfont1">
       <header>
       <!--Dropdown content begin-->
       <ul id="dropdown1" class="dropdown-content">
         <li><a class="gfont1" href="#">UI #1</a></li>
         <li><a class="gfont1" href="#">#2</a></li>
         <li><a class="gfont1" href="#">#3</a></li>
         <li><a class="gfont1" href="#">#4</a></li>
       </ul>
       <ul id="dropdown3" class="dropdown-content">
         <!-- Hides Register and login if logged in-->
         <?php
              if (isset($_SESSION['userID'])) {
                echo '<li><a class="gfont1" href="edituser.php">Change Account</a></li>
                      <li><a class="gfont1" href="logout.inc.php">Log Out</a></li>';
              }
              else {
                echo '<li><a class="gfont1" href="signup.php">Register</a></li>
         <li><a class="gfont1" href="login.php">Login</a></li>';
        }
          ?>
       </ul>
       <ul id="dropdown6" class="dropdown-content gfont1">
         <?php
              if (isset($_SESSION['userID'])) {
                echo '<li><a class="gfont1" href="edituser.php">Change Account</a></li>
                      <li><a class="gfont1" href="logout.inc.php">Log Out</a></li>';
              }
              else {
                echo '<li><a class="gfont1" href="signup.php">Register</a></li>
         <li><a class="gfont1" href="login.php">Login</a></li>';
        }
          ?>
       </ul>
       <!-- Dropdown content end-->
       <!--Navbar Begin-->
       <nav>
         <div class="nav-wrapper grey darken-2">
           <a href="index.php" class="col l4 s12 brand-logo gfont1">JPA Cars</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <?php
                  if (isset($_SESSION['userID'])) {
                    echo '<li><a href="cars.php" >Cars</a></li>'; }
                    ?>
             <li><a href="aboutus.php">About Us</a></li>
             <li><a class="dropdown-button" href="signup.php" data-activates="dropdown3" data-beloworigin="true">Account</a></li>
           </ul>

           <ul class="side-nav" id="mobile-demo">
             <?php
                  if (isset($_SESSION['userID'])) {
                    echo '<li><a href="cars.php" >Cars</a></li>';}
                    ?>
             <li><a href="aboutus.php">About Us</a></li>
             <li><a class="dropdown-button" href="#" data-activates="dropdown6" data-beloworigin="true">Account</a></li>
      </ul>
         </div>
       </nav>
     </header>
