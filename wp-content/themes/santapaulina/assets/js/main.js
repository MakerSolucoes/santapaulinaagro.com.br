function scrollToAnchor(sectionID) {
    $('html,body').animate({
      scrollTop: $(sectionID).offset().top + 200
    }, 2000);
    alert('teste')
  }
$(function () { 
    $('.image-control').hover(function(){
        $(this).toggleClass('active');
    })
    $(window).scroll(function() 
    {
     if ($(this).scrollTop() > 1)
     {
      $('header').addClass("sticky");
     }
     else
     {
      $('header').removeClass("sticky");
     }
    });
});

