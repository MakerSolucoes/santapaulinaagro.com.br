$(document).ready(function() {
    function scrollNext() {
      var galeria = $('.galeria-navigation');
      var firstImage = galeria.find('img:first');
      var scrollAmount = firstImage.outerWidth(true);

      galeria.animate({ scrollLeft: '+=' + scrollAmount }, 500, function() {
        if (galeria.scrollLeft() >= galeria[0].scrollWidth - galeria.outerWidth()) {
          galeria.scrollLeft(0);
        }
      });
    }

    setInterval(scrollNext, 1000);
  });
