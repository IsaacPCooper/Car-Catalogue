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
         <div>
           <form action ="includes/login.inc.php" method="post">
             <input type = "text" name="mailuid" placeholder="Username/E-mail...">
             <input type = "password" name="mailuid" placeholder="Password">
             <button type = "submit" name="login-submit"> Login</button>
           </form>
           <a href="signup.php">Sign Up</a>
           <form action ="includes/logout.inc.php" method="post">
             <button type = "submit" name="logout-submit"> Log Out</button>
           </form>
         </div>
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
