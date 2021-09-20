// Drag & Drop: Config
myDropzone.on('sending', function (file, xhr, formData) {
  var data = $('#order_form').serializeArray();
  formData.append('form', 'order');
  $.each(data, function (key, element) {
    formData.append(element.name, element.value);
  });

  $('#order_dialog div').toggleClass('d-none');

});

// Document is ready
$(function () {

});