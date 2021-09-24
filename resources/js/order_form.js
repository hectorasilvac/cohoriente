// Drag & Drop: Config
let myDropzone = new Dropzone('#my-dropzone', {
  url: '/contacto/enviar',
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

myDropzone.on('success', function (file, response) {
  $('.dialog_loading').addClass('d-none');
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
  var orderDialog = document.getElementById('order_dialog');

  $('.order_submit').on('click', function () {
    event.preventDefault();
    $('#order_form').submit();

    if (myDropzone.files.length === 0) {
      $('.dropzone_error').removeClass('d-none');
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
    // myDropzone.processQueue();

    /* New Code */
    $('.order_conf').addClass('d-none-force').hide().fadeIn('fast');
    $('.order_btns').addClass('d-none-force').hide().fadeIn('fast');
    $('.order_msg').removeClass('d-none-force').hide().fadeIn('fast');
    /* New Code */
  });

  // Form validation: Rules
  $('#order_form').validate({
    lang: 'es',
    normalizer: function (value) {
      return $.trim(value);
    },
    highlight: function (element) {
      $(element).closest('input').addClass('has-error');
    },
    unhighlight: function (element) {
      $(element).closest('input').removeClass('has-error');
    },
    rules:
    {
      fullname:
      {
        required: true,
        lettersonly_es: true,
        minlength: 3,
        maxlength: 50,
      },
      phone:
      {
        required: true,
        digits: true,
        minlength: 7,
        maxlength: 10,
      },
      email:
      {
        required: true,
        email: true,
        maxlength: 60,
      },
      company:
      {
        required: true,
        letters_numbers: true,
        maxlength: 50,
      },
    },
    messages:
    {
      fullname:
      {
        required: 'Este campo es obligatorio.',
        minlength: 'Por favor ingresa un nombre válido.',
        lettersonly_es: 'Solo se permiten letras.',
        maxlength: 'Solo se permiten 50 caracteres.',
      },
      phone:
      {
        required: 'Este campo es obligatorio.',
        digits: 'Solo se permiten números.',
        minlength: 'Minímo se permiten 7 caracteres.',
        maxlength: 'Solo se permiten 10 caracteres.',
      },
      email:
      {
        required: 'Este campo es obligatorio.',
        maxlength: 'Solo se permiten 60 caracteres.',
      },
      company:
      {
        required: 'Este campo es obligatorio.',
        maxlength: 'Solo se permiten 50 caracteres.',
      },
    },
  });

  // Form validation: Ajax Config
  $('#order_form').ajaxForm(
    {
      beforeSubmit: function () {
        // if (myDropzone.files.length === 0) {
        //   $('.dropzone_error').removeClass('d-none');
        // } else {
        orderDialog.showModal();
      // }
      //   return false;
      }
    });

});