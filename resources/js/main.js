$(function () {
  // Main Menu
  $('.hamburger').on('click', function () {

    $('body').toggleClass('overflow-hidden');
    $('.hamburger').toggleClass('active fa-bars fa-times').hide().fadeIn('fast');
    $('.nav_menu').toggleClass ('active');
    $('.overlay').toggleClass('active');
  });
});

