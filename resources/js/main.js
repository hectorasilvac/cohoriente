$(function () {
  // Navegation Bar
  $('.hamburger_icon').on('click', function () {

    $('body').toggleClass('overflow-hidden');
    $('.hamburger_icon').toggleClass('active fa-bars fa-times').hide().fadeIn('fast');
    $('.menu').toggleClass ('active');
    $('.overlay').toggleClass('active');
  });
});

