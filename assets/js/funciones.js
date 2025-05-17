


new WOW().init(); 
  
      $('.carousel').carousel({
  interval: 5000
})
      function animationHover(element, animation){
          element = $(element);
          element.hover(
              function() {
                  element.addClass('animated ' + animation);
              },
              function(){
                  window.setTimeout( function(){
                      element.removeClass('animated ' + animation);
                  }, 2000);
              });
      }
      $(document).ready(function(){
          $('#animacion').each(function() {
              animationHover(this, 'pulse');
          });
          $('#animacion1').each(function() {
              animationHover(this, 'pulse');
          });
          $('#animacion2').each(function() {
              animationHover(this, 'pulse');
          });
          $('#animacion3').each(function() { 
              animationHover(this, 'bounce');
          });
          $('#animacion5').each(function() {
              animationHover(this, 'flipInX');
          });
          $('#animacion6').each(function() {
              animationHover(this, 'flipInX');
          });
          $('#animacion7').each(function() {
              animationHover(this, 'flipInX');
          });
          $('#animacion8').each(function() {
              animationHover(this, 'bounceIn');
          });
          $('#animacion9').each(function() {
              animationHover(this, 'zoomIn');
          });
          $('#animacion10').each(function() {
              animationHover(this, 'bounceInUp');
          });
          $('#animacion11').each(function() {
              animationHover(this, 'bounceInUp');
          });
          $('#animacion12').each(function() {
              animationHover(this, 'bounceInUp');
          });
          // $('#animacion13').each(function(){
          //   animationHover(this, 'bounceInUp');
          // });
      });
