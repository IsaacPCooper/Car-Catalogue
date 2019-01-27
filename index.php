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
