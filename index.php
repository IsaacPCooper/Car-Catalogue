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
   </head>

     <!--Import jQuery before materialize.js-->
     <!--Navbar-->
     <?php
     require "header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <p> You are Logged out! </p>
         <p> You are Logged In! </p>
         <!--Body scripts-->
         <script type="text/javascript" language="javascript">
              $( document ).ready(function(){

                  $(".button-collapse").sideNav();//mobile screen menu init

                  $('.carousel').carousel(); //carousel init

                  $('.carousel-slider').slider({full_width: true});//slider init
              });
          </script>
         <h1 align="center"> TEST HEADER </h1>
         <div class="container">
     <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
  </div>
</div>
</main>
<!--Footer Start-->
<?php
require "footer.php";
 ?>
</body>
 </html>
