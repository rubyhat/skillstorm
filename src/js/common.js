$(document).ready(function () {
  //Scroll
  $('.scroll-anch').click(function () {
    var scroll_el = $(this).data('target');
    if ($(scroll_el).length != 0) {
      $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 750);
    }
    return false;
  });

  $('.scroll-anch').click(function () {
    $('html body').animate({
      scrollTop: $(this).offset().top
    }, 750)
  });
  // Animation
  new WOW().init();

});