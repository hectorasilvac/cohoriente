var loadSection = function ({ section }) {
    var page = {
        name: '',
        url: '',
        detail: '',
    };

    if (section === 'jobs') {
        page = {
            name: 'jobs',
            url: '../../application/views/pages/classifieds_jobs.tpl',
            detail: '../../application/views/pages/classifieds_jobs_desc.tpl',
        };
    }

    if (section === 'supplies') {
        page = {
            name: 'supplies',
            url: '../../application/views/pages/classifieds_supplies.tpl',
            detail: '../../application/views/pages/classifieds_supplies_desc.tpl',
        };
    }

    $('.classified_content').load(page.url, function () {

        if (page.name === 'jobs') {
            $('#classified_jobs').addClass('tab_active');
            $('#classified_supplies').removeClass('tab_active');
        } else {
            $('#classified_supplies').addClass('tab_active');
            $('#classified_jobs').removeClass('tab_active');
        }

        // Load detail button
        $('.card_ad_button').on('click', function () {
            $('#classified_description').addClass('active');
            setTimeout(function () {
              $('#all_classifieds').hide();
            }, 500);
          });

          // Load ad detail
          $('#classified_description').load(page.detail, function () {

            // Dialog: Load confirmation
            var classifiedDialog = document.getElementById('classified_dialog');
      
            $('#classified_send').on('click', function () {
              classifiedDialog.showModal();
            });
      
            $('.classified_dialog_close').on('click', function () {
              classifiedDialog.close();
            });
      
            // Dialog: Confirm action
            $('.classified_dialog_confirm').on('click', function () {
              $('#classified_dialog div').toggleClass('d-none');
            });
      
            // Dialog: Go back
            $('#classified_back').on('click', function () {
              event.preventDefault();
              $('#classified_description').removeClass('active');
              $('#all_classifieds').show();
            });
          });
    }).hide().fadeIn('fast');
}

// Document is ready
$(function() {
    loadSection({ section: 'jobs'});

    // Tabs: Select a section
    $('#classified_jobs').on('click', function () {
        loadSection({ section: 'jobs'});
    });

    $('#classified_supplies').on('click', function () {
        loadSection({ section: 'supplies'});
    });
});