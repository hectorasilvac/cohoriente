
// // Document is ready
$(function () {

  // Modal: Show and close modal
  var contactDialog = document.getElementById('contact_dialog');

  $('.contact_submit').on('click', function () {
    event.preventDefault();
    contactDialog.showModal();
  });

  $('.contact_close_dialog').on('click', function () {
    contactDialog.close();
  });
});

