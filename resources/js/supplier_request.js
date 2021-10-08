// Document is ready
$(function () {

  $('.form_submit').on('click', function () {
    event.preventDefault();
    $('#supplier_form').submit();
  });

  // Request Confirmation: Confirm action
  $('.dialog_confirm').on('click', function () {
    var formData = $('#supplier_form').serializeArray();
    var formattedData = {
      'form': 'supplier',
    };

    $.each(formData, function (key, element) {
      formattedData[element.name] = element.value;
    });

    $.ajax({
      url: '/contacto/solicitud-proveedor/enviar',
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
        $("#supplier_form").trigger("reset");

        $('.dialog_loading').addClass('d-none');
        $('.dialog_response').removeClass('d-none');
        $('.dialog_response').html(message);
      },
    });
  });

  // Form validation: Rules
  $('#supplier_form').validate({
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
  $('#supplier_form').ajaxForm(
    {
      beforeSubmit: function () {
        formModal.show()
        return false;
      }
    });

    // Bootstrap Modal

    var formModal = new bootstrap.Modal(document.getElementById('form_dialog'), {
      keyboard: true,
    })
});