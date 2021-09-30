$(function () {
  $('details').on('click', function () {

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

    $(this).find('.about_card_icon').removeClass('fa-angle-double-down').addClass('fa-angle-double-up');
  });
});
