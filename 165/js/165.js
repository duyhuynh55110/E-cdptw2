$(function () {
  $(document).ready(function() {
      $('.collapse-link').on('click', function() {
          var box_panel = $(this).closest('.x_panel'),
              icon = $(this).find('i'),
              box = box_panel.find('.x_content');

          // fix for some div with hardcoded fix class
          if (box_panel.attr('style')) {
              icon.slideToggle(200, function(){
                  box_panel.removeAttr('style');
              });
          } else {
              box_content.slideToggle(200);
              box_panel.css('height', 'auto');
          }

          icon.toggleClass('fa-chevron-up fa-chevron-down');
      }),
      ('.close-link').click(function () {
          var a = $(this).closest('.x_panel');

          a.hide();
          $('#open').show();
      });

      $('#open').click(function () {
        var a = $(this).next(".x_panel");

        a.show();
        $(this).hide();
      });
  });
});
