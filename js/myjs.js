$('.dropdown-button').dropdown({
     inDuration: 300,
     outDuration: 225,
     constrainWidth: false, // Does not change width of dropdown to that of the activator
     hover: true, // Activate on hover
     gutter: 0.5, // Spacing from edge
     belowOrigin: false, // Displays dropdown below the button
     alignment: 'bottom', // Displays dropdown with edge aligned to the left of button
     stopPropagation: false // Stops event propagation
   }
 );
 $( document ).ready(function(){

                 $(".button-collapse").sideNav();//mobile screen menu init

                 $('.carousel').carousel(); //carousel init

                $('.carousel-slider').slider({full_width: true});//slider init
             });
