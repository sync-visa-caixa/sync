
(function ($) {
    "use strict";
  
  
    /* preload
    ------------------------------------------------------------------------------------- */
    const preload = function () {
      setTimeout(function () {
        $(".preload").fadeOut("slow", function () {
          $(this).remove();
        });
      }, 150);
    };
  
    /* Dom Ready */
    $(function () {
      preload();
    });
  })(jQuery);
  