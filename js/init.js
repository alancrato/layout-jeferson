(function($){
  $(function(){

    $('.sidenav').sidenav();

    $(document).ready(function(){
        $('.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 400
        });
        autoplay();
    });

      $(document).ready(function(){
          $('.materialboxed').materialbox();
      });

      $(".dropdown-trigger").dropdown();

      function autoplay() {
          $('.carousel').carousel('next');
          setTimeout(autoplay, 5000);
      }

      $(document).ready(function(){
          $('.collapsible').collapsible();
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space
