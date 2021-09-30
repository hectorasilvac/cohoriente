$(function () {
  // About Us - Arrow
  $('.about_card_header').on('click', function () {
    $(this).children('.about_card_icon').toggleClass('fa-angle-double-down');
    $(this).children('.about_card_icon').toggleClass('fa-angle-double-up');
  });

  $('details').on('click', function() {
    var isOpen = $('details[open]');

alert('xdas');
    console.log($(this));
    return;
 
    if (isOpen.length > 0) {
      $('details').removeAttr('open').hide().fadeIn('fast');
    }

  });
});
