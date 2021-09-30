// Drag & Drop: Config
let myDropzone = new Dropzone('#my-dropzone', {
  url: '/clasificados/aplicar',
  autoProcessQueue: false,
  uploadMultiple: false,
  parallelChunkUploads: false,
  maxFiles: 1,
  acceptedFiles: 'application/pdf',
  parallelUploads: 1,
  addRemoveLinks: true,
  dictRemoveFile: 'Quitar',
  clickeable: false,
});

myDropzone.on('sending', function (file, xhr, formData) {
  formData.append('url', window.location.href);
  formData.append('name', $('.classified_name').text());
});

myDropzone.on('success', function (file, response) {
  $("#order_form").trigger("reset");
  this.removeAllFiles();

  $('.dialog_loading').addClass('d-none');
  $('.dialog_response').removeClass('d-none');
  $('.dialog_response').html(JSON.parse(response).message);
});

myDropzone.on('maxfilesexceeded', function (file) {
  this.removeAllFiles();
  this.addFile(file);
});

myDropzone.on('addedfiles', function () {
  $('.dropzone_error').addClass('d-none');
});

// Document is ready
$(function () {

  // Request Confirmation: Show dialog, confirm or cancel request and close dialog
  var orderDialog = document.getElementById('form_dialog');

  $('.form_back').on('click', function () {
    window.history.back();
  });

  $('.form_submit').on('click', function () {
    event.preventDefault();

    if (myDropzone.files.length === 0) {
      $('.dropzone_error').removeClass('d-none');
    } else {
      orderDialog.showModal();
    }
  });

  $('.dialog_close').on('click', function () {
    orderDialog.close();
  });

  // Request Confirmation: Cancel action
  $('.dialog_cancel').on('click', function () {
    orderDialog.close();
  });

  // Request Confirmation: Confirm action
  $('.dialog_confirm').on('click', function () {
    $('.dialog_conf').addClass('d-none-force').hide().fadeIn('fast');
    $('.dialog_btns').addClass('d-none-force').hide().fadeIn('fast');
    $('.dialog_msg').removeClass('d-none-force').hide().fadeIn('fast');

    myDropzone.processQueue();
  });
});