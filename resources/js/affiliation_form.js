
// // Document is ready
$(function () {

  // Dialog: Show and close
  var affiliationDialog = document.getElementById('affiliation_dialog');

  $('.affiliation_submit').on('click', function () {
    event.preventDefault();
    affiliationDialog.showModal();
  });

  $('.dialog_close').on('click', function () {
    affiliationDialog.close();
  });

  $('.dialog_cancel').on('click', function () {
    affiliationDialog.close();
  });

  // Dialog: Confirm action
  $('.dialog_confirm').on('click', function () {
    $('#affiliation_dialog div').toggleClass('d-none');
  });
});