// Document is ready
$(function () {

  // Tabs
  $('.offers_jobs').on('click', function () {

    $('.offers_jobs').addClass('tab_active');
    $('.offers_supplies').removeClass('tab_active');
    $('.supplies').addClass('d-none');
    $('.vacancies').removeClass('d-none').hide().fadeIn('fast');

  }).hide().fadeIn('fast');

  $('.offers_supplies').on('click', function () {

    $('.offers_jobs').removeClass('tab_active');
    $('.offers_supplies').addClass('tab_active');
    $('.vacancies').addClass('d-none');
    $('.supplies').removeClass('d-none').hide().fadeIn('fast');

  }).hide().fadeIn('fast');

  /***********************************************/
  /******************* Vacancy *******************/
  /***********************************************/

  // Vacancy Description: Apply
  $('.ad_link').on('click', function () {
    $('.offers_tabs').addClass('d-none').hide().fadeIn('fast');
    $('.vacancies').addClass('d-none').hide().fadeIn('fast');
    $('.supplies').addClass('d-none').hide().fadeIn('fast');
    $('.ad_detail').removeClass('d-none').hide().fadeIn('fast');
  });

  // Vacancy Description: Back
  $('.ad_back').on('click', function () {
    $('.offers_tabs').removeClass('d-none').hide().fadeIn('fast');
    $('.vacancies').removeClass('d-none').hide().fadeIn('fast');
    $('.ad_detail').addClass('d-none').hide().fadeIn('fast');
  });


  // Vacancy Dialog: Open and Close
  var confirmationDialog = document.getElementById('confirmation_dialog');

  $('.ad_send').on('click', function () {
    confirmationDialog.showModal();
  }).hide().fadeIn('fast');

  $('.ad_close').on('click', function () {
    confirmationDialog.close();
  }).hide().fadeIn('fast');

  // Vacancy Dialog: Confirm Action
  $('.confirmation_confirm').on('click', function () {
    $('.confirmation_wrapper').addClass('d-none');
    $('.confirmation_footer').addClass('d-none');
    $('.confirmation_finish').removeClass('d-none');
  }).hide().fadeIn('fast');

  /************************************************/
  /******************* Supplies *******************/
  /************************************************/

  // Supplies Description: Apply
  $('.ad_quote').on('click', function () {
    $('.offers_tabs').addClass('d-none').hide().fadeIn('fast');
    $('.vacancies').addClass('d-none').hide().fadeIn('fast');
    $('.supplies').addClass('d-none').hide().fadeIn('fast');
    $('.ad_detail').removeClass('d-none').hide().fadeIn('fast');

    console.log($(this).parent().siblings('.ad_wrapper'));
  });

});

// var loadSection = function ({ section }) {
//     var page = {
//         name: '',
//         url: '',
//         detail: '',
//     };

//     if (section === 'jobs') {
//         page = {
//             name: 'jobs',
//             url: '../../application/views/pages/classifieds_jobs.tpl',
//             detail: '../../application/views/pages/classifieds_jobs_desc.tpl',
//         };
//     }

//     if (section === 'supplies') {
//         page = {
//             name: 'supplies',
//             url: '../../application/views/pages/classifieds_supplies.tpl',
//             detail: '../../application/views/pages/classifieds_supplies_desc.tpl',
//         };
//     }

//     $('.classified_content').load(page.url, function () {

//         if (page.name === 'jobs') {
//             $('#classified_jobs').addClass('tab_active');
//             $('#classified_supplies').removeClass('tab_active');
//         } else {
//             $('#classified_supplies').addClass('tab_active');
//             $('#classified_jobs').removeClass('tab_active');
//         }

//         // Load detail button
//         $('.card_ad_button').on('click', function () {
//             $('#classified_description').addClass('active');
//             setTimeout(function () {
//               $('#all_classifieds').hide();
//             }, 500);
//           });

//           // Load ad detail
//           $('#classified_description').load(page.detail, function () {

//             // Dialog: Load confirmation
//             var classifiedDialog = document.getElementById('classified_dialog');

//             $('#classified_send').on('click', function () {
//               classifiedDialog.showModal();
//             });

//             $('.classified_dialog_close').on('click', function () {
//               classifiedDialog.close();
//             });

//             // Dialog: Confirm action
//             $('.classified_dialog_confirm').on('click', function () {
//               $('#classified_dialog div').toggleClass('d-none');
//             });

//             // Dialog: Go back
//             $('#classified_back').on('click', function () {
//               event.preventDefault();
//               $('#classified_description').removeClass('active');
//               $('#all_classifieds').show();
//             });
//           });
//     }).hide().fadeIn('fast');
// }

  // offers_jobs
  // offers_supplies

    // loadSection({ section: 'jobs'});

    // // Tabs: Select a section
    // $('#classified_jobs').on('click', function () {
    //     loadSection({ section: 'jobs'});
    // });

    // $('#classified_supplies').on('click', function () {
    //     loadSection({ section: 'supplies'});
    // });