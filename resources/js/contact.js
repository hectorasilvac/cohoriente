// Document is ready
$(function () {

  // Request Confirmation: Show dialog, confirm or cancel request and close dialog
  var orderDialog = document.getElementById('form_dialog');

  $('.form_submit').on('click', function () {
    event.preventDefault();
    $('#contact_us').submit();
  });

  // Request Confirmation: Confirm action
  $('.dialog_confirm').on('click', function () {
    var formData = $('#contact_us').serializeArray();
    var formattedData = {};

    $.each(formData, function (key, element) {
      formattedData[element.name] = element.value;
    });

    $.ajax({
      url: '/contacto/enviar',
      type: "POST",
      dataType: "json",
      data: formattedData,
      beforeSend: function () {
        $('.modal-header').addClass('d-none-force').hide().fadeIn('fast');
        $('.modal-body').addClass('d-none-force').hide().fadeIn('fast');
        $('.modal-footer').addClass('d-none-force').hide().fadeIn('fast');
        $('.dialog_msg').removeClass('d-none-force').hide().fadeIn('fast');
      },
      success: function ({ data, message }) {
        $("#contact_us").trigger("reset");

        $('.dialog_loading').addClass('d-none');
        $('.dialog_response').removeClass('d-none');
        $('.dialog_response').html(message);
      },
    });
  });

  // Form validation: Rules
  $('#contact_us').validate({
    lang: 'es',
    normalizer: function (value) {
      return $.trim(value);
    },
    highlight: function (element) {
      $(element).closest('input').addClass('has-error');
      $(element).closest('textarea').addClass('has-error');

    },
    unhighlight: function (element) {
      $(element).closest('input').removeClass('has-error');
      $(element).closest('textarea').removeClass('has-error');
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
      message:
      {
        required: true,
        letters_numbers: true,
        maxlength: 500,
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
      message:
      {
        required: 'Este campo es obligatorio.',
        maxlength: 'Solo se permiten 500 caracteres.',
      },
    },
  });

  // Form validation: Ajax Config
  $('#contact_us').ajaxForm(
    {
      beforeSubmit: function () {
        formModal.show();
        return false;
      }
    });

  // Bootstrap Modal
  var formModal = new bootstrap.Modal(document.getElementById('form_dialog'), {
    keyboard: true,
  })

});