$(document).ready(function() {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });

    // close browser warning
    $('.browserupgrade .fa-times').on('click', function() {
        $('.browserupgrade').fadeOut();
    });

    // toggle the hamburger animation
    $('.hamburger').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('header .row').toggleClass('is-open');
    });

    // show/hide the trips subnav dropdown
    $('header .col-md-5:nth-child(1) nav a:nth-child(2)').on({
        mouseenter: function() {
            $('.trips-subnav').addClass('nav-down');
        },
        mouseleave: function(e) {
            var $this = $(this);
            var bottom = $this.offset().top + $this.outerHeight();
            if (e.pageY >= bottom) {
                $('.trips-subnav').addClass('nav-down');
            } else {
                $('.trips-subnav').removeClass('nav-down');
            };
        }
    });
    $('.trips-subnav').on({
        mouseleave: function(e) {
            var $this = $(this);
            var leftRight = $this.offset().top + $this.width();
            if (e.pageX >= leftRight || e.pageX <= leftRight) {
                $('.trips-subnav').addClass('nav-down');
            };

            var bottom = $this.offset().top + $this.outerHeight();
            if (e.pageY >= bottom) {
                $('.trips-subnav').removeClass('nav-down');
            };
        }
    });

    // toggle the trip types
    $('.trip-types').on('click', function() {
        $('.trips-subnav').toggleClass('is-open');
    });

    // calculate cta text margin
    function ctaMargin(width) {
        $('.contact-ctas__cta__text').each(function() {
            var $this = $(this);
            var ctaTextHeight = $this.outerHeight();
            $this.css({
                'margin-top': -(ctaTextHeight / 2)
            });
            $this.parent().children('.contact-ctas__cta__img').children('img').css({
                'transform': 'translate(-50%, calc(-47% - ' + (ctaTextHeight / 4) + 'px))'
            });
        });
    }
    ctaMargin( $(window).width() );
    $(window).on('resize', function() {
        ctaMargin( $(this).width() );
    });

});