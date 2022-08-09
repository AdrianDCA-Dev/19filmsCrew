(function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 2.0 Nav Active Code
    if ($.fn.classyNav) {
        $('#vizewNav').classyNav();
    }

    // :: 6.0 Nicescroll Active Code
    if ($.fn.niceScroll) {
        $(".vizew-nav-tab").niceScroll({
            cursorcolor: "#838586",
            cursorwidth: "6px",
            cursorborder: 'none'
        });
    }

    // :: 7.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="ti-angle-up"></i>'
        });
    }

    // :: 8.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 9.0 CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    }

    // :: 10.0 Prevent Default a Click
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault();
    });

    // :: 11.0 Wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

})(jQuery);