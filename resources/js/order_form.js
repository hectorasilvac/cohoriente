// Drag & Drop: Config
// Dropzone.options.myDropzone = {
//   // autoProcessQueue: false,
//   uploadMultiple: false,
//   parallelChunkUploads: false,
//   maxFiles: 1,
//   acceptedFiles: 'application/pdf',
//   parallelUploads: 1,
//   addRemoveLinks: true,
//   dictRemoveFile: 'Quitar',
//   init: function () {
//     this.on("maxfilesexceeded", function (file) {
//       this.removeAllFiles();
//       this.addFile(file);
//     });

//     this.on('addedfile', file => {
//       console.log('A file has been added');
//     });
//   },
// };

// Dropzone.options.myDropzone.on('sending', function (file, xhr, formData) {
//   console.log('sending');
// });

let myDropzone = new Dropzone('#my-dropzone', { 
  url: '/contacto/enviar',
  autoProcessQueue: false,
  uploadMultiple: false,
  parallelChunkUploads: false,
  maxFiles: 1,
  acceptedFiles: 'application/pdf',
  parallelUploads: 1,
  // addRemoveLinks: true,
  // dictRemoveFile: 'Quitar',
});

myDropzone.on('sending', function (file, xhr, formData) {
  console.log($('#order_form').serializeArray());

});

// Document is ready
$(function () {

  // Form validation: Rules
  $('#order_form').validate({
      lang: 'es',
      normalizer: function (value) {
				return $.trim(value);
			},
      highlight: function(element) {
        $(element).closest('input').addClass('has-error');
      },
      unhighlight: function(element) {
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
    
    // Form validation: Submit
    $('.order_submit').on('click', function() 
    {
        $('#order_form').submit();
    });

    // Form validation: Ajax Config
    $('#order_form').ajaxForm(
    {
        dataType:  'json',
        // success:   add,
        beforeSubmit: function() 
        { 
          myDropzone.processQueue();
            // $('#loading').removeClass('d-none');

            return false;
        }
    });

    function add(response)
    {
    // modal_alert(response.data, response.message);

    // if (response.data)
    // {
    //     $('#view_form_add').addClass('d-none');
    // }
  }

  // Dialog: Show and close
  var orderDialog = document.getElementById('order_dialog');

  $('.order_submit').on('click', function () {
    event.preventDefault();
    orderDialog.showModal();
  });

  $('.dialog_close').on('click', function () {
    orderDialog.close();
  });

  $('.dialog_cancel').on('click', function () {
    orderDialog.close();
  });

  // Dialog: Confirm action
  $('.dialog_confirm').on('click', function () {
    $('#order_dialog div').toggleClass('d-none');
  });

});