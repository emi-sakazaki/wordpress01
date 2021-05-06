$(function() {
  'use strict';

  let
    headerHeight = $('header').height(),
    target       = '',
    targetY      = 0,
    scrollPos    = 0,
    $hamburger   = $('#gnav_input');

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    target = $(this).attr('href');

    if($(target).length) {
      targetY   = $(target).offset().top;
      scrollPos = targetY - headerHeight;

      if(scrollPos < 0) {
        scrollPos = 0;
      }

      $('html, body').not(':animated').animate({scrollTop: scrollPos}, 500);

      if($hamburger.prop('checked')) {
        $hamburger.prop('checked', false);
      }
    }
  });
});
