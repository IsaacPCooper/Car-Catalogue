<!DOCTYPE html>
 <html>
   <head>
     <title>UI + UX</title>
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
     <script type="text/javascript" src="js/myjs.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>


     <!--Import jQuery before materialize.js-->
     <!--Navbar-->
     <body class = "ibg gfont1">
       <!--Dropdown content begin-->
       <ul id="dropdown1" class="dropdown-content">
         <li><a class="gfont1" href="Index.html">UI Summary</a></li>
         <li><a class="gfont1" href="badui.html">Bad UI</a></li>
         <li><a class="gfont1" href="nui.html">Neutral UI</a></li>
         <li><a class="gfont1" href="gdui.html">Good UI</a></li>
       </ul>
       <ul id="dropdown2" class="dropdown-content">
         <li><a class="gfont1" href="UX.html">UX Summary</a></li>
         <li><a class="gfont1" href="badux.html">Poor UX</a></li>
         <li><a class="gfont1" href="nux.html">Passable UX</a></li>
         <li><a class="gfont1" href="gdux.html">Great UX</a></li>
       </ul>
       <ul id="dropdown3" class="dropdown-content gfont1">
         <li><a class="gfont1" href="Index.html">UI Summary</a></li>
         <li><a href="badui.html">Bad UI</a></li>
         <li><a href="nui.html">Neutral UI</a></li>
         <li><a href="gdui.html">Good UI</a></li>
       </ul>
       <ul id="dropdown4" class="dropdown-content gfont1">
          <li><a class="gfont1" href="UX.html">UX Summary</a></li>
         <li><a href="badux.html">Poor UX</a></li>
         <li><a href="nux.html">Passable UX</a></li>
         <li><a href="gdux.html">Great UX</a></li>
       </ul>
       <!-- Dropdown content end-->
       <!--Navbar Begin-->
       <nav>
         <div class="nav-wrapper grey darken-2">
           <a href="index.html" class="brand-logo gfont1">UI + UX</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a class="dropdown-button" href="index.html" data-activates="dropdown1" data-beloworigin="true">UI</a></li>
             <li><a class="dropdown-button" href="UX.html" data-activates="dropdown2" data-beloworigin="true">UX</a></li>
             <li><a href="steam.html">Steam</a></li>
             <li><a href="nint.html">Nintendo</a></li>
           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a class="dropdown-button" href="index.html" data-activates="dropdown3" data-beloworigin="true">UI</a></li>
             <li><a class="dropdown-button" href="UX.html" data-activates="dropdown4" data-beloworigin="true">UX</a></li>
             <li><a href="steam.html">Steam</a></li>
             <li><a href="nint.html">Nintendo</a></li>
      </ul>
         </div>
       </nav>
       <script> $(".button-collapse").sideNav(); </script>
       <!--Navbar end-->
       <main>
       <!--First Paragraph Begin-->
       <div class="gfont1b">
       <div class="container" align=center><h1>UI - Importance Of Interface Design</h1>
       <p>UIs (User Interfaces) are a direct path between user and product in regards to computer-based development.</p>
         <p>The quality of a user interface can heavily impact the way a user interacts with a product and can even determine the overall user experience.</p>
         <p>A well developed UI is developed in a cohesive manner and allows users to clearly see what is going on in terms of navigation and content.</p>
         <img class="responsive-img" src="assets/leaf.jpeg">
    <p>Below are dropdown menus overviewing key points in different stages of UI developments, to view key points click on the button referring to the level of UI to see more information:</p>
    </div>


        <!--Collapsilbe Start-->
        <div class="container">
        <ul class="ibg2 collapsible" data-collapsible="accordion">
   <li>
     <!--Collapse1-->
     <div class="collapsible-header"><i class="material-icons">code</i>Poor UI</div>
     <div class="collapsible-body">
      <span>
        <ol>
          <li>Difficult to use</li>
          <li>Illogical structure</li>
          <li>Clunky</li>
        </ol>
        </span>
      </div>
   </li>
   <!--Collapse1 End-->
   <li>
     <!--Collapse2-->
     <div class="collapsible-header"><i class="material-icons">code</i>Passable UI</div>
     <div class="collapsible-body">
       <span>
         <ol>
           <li>Usable with minimal difficulty</li>
           <li>Somewhat structured</li>
           <li>Some form of basic design</li>
         </ol>
       </span>
     </div>
   </li>
   <!--Collpase2 End-->
   <li>
     <div class="collapsible-header"><i class="material-icons">code</i>Great UI</div>
     <div class="collapsible-body">
       <span>
         <ol>
           <li>Easy to use</li>
           <li>Coherent Design</li>
           <li>Distinguishable style</li>
         </ol>
       </span>
     </div>
   </li>
 </ul>
 <p align="center"> Shown below are examples the different types of UI:</p>
       </div>
     </div>
<!--First Paragraph End-->

           <div align=center class="row">
             <div class="col s4"><a class="z-depth-2 btn btn-floating btn-large red darken-2 pulse" href="badui.html" ><i class="material-icons">code</i></a></div>
             <div class="col s4"><a class="z-depth-2 btn btn-floating btn-large blue darken-2 pulse" href="nui.html"><i class="material-icons">code</i></a></div>
             <div class="col s4"><a class="z-depth-2 btn btn-floating btn-large green darken-2 pulse" href="gdui.html"><i class="material-icons">code</i></a></div>
             <div class="col s4 gfont1b"><p>Poor UI</p></div>
             <div class="col s4 gfont1b"><p>Passable UI</p></div>
             <div class="col s4 gfont1b"><p>Great UI</p></div>
</div>
</div>
</body>
</main>
<!--Footer Start-->
<footer class="page-footer grey darken-2">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <img src="assets/logo.png" height="100px" width="100px">
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">Links to the developer's online content</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="https://github.com/JordanPCAustin">Github</a></li>
                 <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/jordan-austin-998845141/">LinkedIn</a></li>
                 <li><a class="grey-text text-lighten-3" href="https://jordanpcaustin.github.io/">Personal Website</a></li>
                 <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Framework Used: Materialize</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
            2017 Jordan P C Austin
           <a class="grey-text text-lighten-4 right" href="#!"></a>
           </div>
         </div>
       </footer>
<!--Footer End-->



 </html>
