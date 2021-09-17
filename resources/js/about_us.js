$(function () {
  // About Us - Arrow
  $('.about_card_header').on('click', function () {
    $(this).children('.about_card_icon').toggleClass('fa-angle-double-down');
    $(this).children('.about_card_icon').toggleClass('fa-angle-double-up');
  });
});

