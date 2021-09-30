$(function () {
  // About Us - Arrow
  $('.about_card_header').on('click', function () {
//     $(this).children('.about_card_icon').toggleClass('fa-angle-double-down');
//     $(this).children('.about_card_icon').toggleClass('fa-angle-double-up');
  });

  $('details').on('click', function() {

    var isOpen = $('details[open]');

    if ($(this).attr('open')) {

      $(this).removeAttr('open');
    $(this).find('.about_card_icon').toggleClass('fa-angle-double-down');
    $(this).find('.about_card_icon').toggleClass('fa-angle-double-up');

      event.preventDefault();

      return;
    } 
 
    if (isOpen.length > 0) {
      $('details').removeAttr('open');
      $('details').find('.about_card_icon').toggleClass('fa-angle-double-down');
      $('details').find('.about_card_icon').toggleClass('fa-angle-double-up');
    }

    $(this).find('.about_card_icon').toggleClass('fa-angle-double-down');
    $(this).find('.about_card_icon').toggleClass('fa-angle-double-up');
 

//     $(this).children('.about_card_icon').toggleClass('fa-angle-double-up');

  });
});

