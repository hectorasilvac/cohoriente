
// // Document is ready
$(function () {

  // Dialog: Show and close
  var supplierDialog = document.getElementById('supplier_dialog');

  $('.supplier_submit').on('click', function () {
    event.preventDefault();
    supplierDialog.showModal();
  });

  $('.dialog_close').on('click', function () {
    supplierDialog.close();
  });

  $('.dialog_cancel').on('click', function () {
    supplierDialog.close();
  });

  // Dialog: Confirm action
  $('.dialog_confirm').on('click', function () {
    $('#supplier_dialog div').toggleClass('d-none');
  });
});


// // // Document is ready
// $(function () {

//   // Dialog: Show and close
//   var supplierDialog = document.getElementById('supplier_dialog');

//   $('.supplier_submit').on('click', function () {
//     event.preventDefault();
//     supplierDialog.showModal();
//   });

//   $('.dialog_close').on('click', function () {
//     supplierDialog.close();
//   });

//   $('.dialog_cancel').on('click', function () {
//     supplierDialog.close();
//   });

//   // Dialog: Confirm action
//   $('.dialog_confirm').on('click', function () {
//     $('#supplier_dialog div').toggleClass('d-none');
//   });
// });