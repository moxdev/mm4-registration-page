$(document).ready(function() {
    $('.read-more-content').addClass('hide');

    $('.read-more-toggle').on('click', function() {
      $(this).next('.read-more-content').toggleClass('hide');
    });
});

