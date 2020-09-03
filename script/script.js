$(function() {

    $(window).on("scroll", function() {
        $('.service-item, .about-main').each(function(index, el) {
            if( $(window).scrollTop() > ($(el).offset().top - $(window).height() / 2)) {
                $(el).addClass('is-over');
            }
        });
    });

    function firstscript() {
        $('.header-title').addClass('is-over');
    }

    window.onload = firstscript;
});





