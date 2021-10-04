$(function () {
  $('details').on('click', function () {
    
    var header = $(this).find('.abt_card_header');

    if (header.hasClass('active')) {
            event.preventDefault();
      return;
    }


    if ($(this).attr('open')) {
      $(this).removeAttr('open');
      $(this).find('.about_card_icon').removeClass('fa-angle-double-up').addClass('fa-angle-double-down');
      event.preventDefault();
      return;
    }

    var isOpen = $('details[open]');

    if (isOpen.length > 0) {

      $('details').removeAttr('open');
      $('details').find('.about_card_icon').removeClass('fa-angle-double-up').addClass('fa-angle-double-down');
    }

    $('.abt_card_header').removeClass('active');
    header.addClass('active');

    $(this).find('.about_card_icon').removeClass('fa-angle-double-down').addClass('fa-angle-double-up');
  });

  $('.abt_card_body').on('click', function() {
      event.preventDefault();
      return false;
  });

});
