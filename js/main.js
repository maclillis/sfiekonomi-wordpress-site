$( document ).ready(function() {

    // Mobile Menu animations (will perfect this later!)

    // Open menu
    $('#sfi-menu-btn').click(function(){
      $('#sfi-menu-background').animate({
        opacity: '0.4'
        }, 700); 


        document.getElementById('sfi-menu-wrapper').style.display = "flex";

        $('#sfi-responsive-menu').animate({
            right: '0'
           }, 700); 
        

      });

    // Close menu
    $('#sfi-menu-close, #sfi-menu-wrapper').click(function(){

      $('#sfi-menu-background').animate({
        opacity: '0'
        }, 300); 

        function slideTimeout() {
          setTimeout(function(){ 
            document.getElementById('sfi-menu-wrapper').style.display = "none";
          }, 3000);
        }

        $('#sfi-responsive-menu').animate({
            right: '-100%'
           }, 700); 

           slideTimeout();
      });

      //Back to top-badge
      topBtn = document.getElementById("sfi-back-top");

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          topBtn.style.display = "flex";
        } else if (document.body.scrollTop === 0 || document.documentElement.scrollTop === 0) {
          topBtn.style.display = "none";
        }

        // Check when the button is at the bottom of the page
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 260) {
            $('#sfi-back-top p').css('color', 'white');
          } else {
            $('#sfi-back-top p').css('color', '#333333'); 
          }

        
      }

      topBtn.addEventListener("click", function() {
        $("html, body").animate({scrollTop:0}, 700, 'swing');
      });

      // Only show 1 current marker in the menu-logic
      if ($('.menu-item').hasClass('current-menu-item')){
            $('.current-menu-item a span').css('visibility', 'visible'); 
            $('.current-menu-item .sfi-chapter-bubble').addClass('current-bubble');
            $('.current-menu-item .sfi-bottom-navigation-bubble-desc').css('display', 'inline');
      }
      
});
