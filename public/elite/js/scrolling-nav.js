//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".img1").addClass("imghide");
        $(".img2").removeClass("imghide");
        $(".img3").addClass("imghide");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".img1").removeClass("imghide");
        $(".img2").addClass("imghide");
        $(".img3").removeClass("imghide");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
