(function($) {
        $(window).on('load', function(event) {
            $('.preloader').delay(500).fadeOut(500);
        });})(jQuery);

 $('.carousel').carousel({
            interval: 5000
          })