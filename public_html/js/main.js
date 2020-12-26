$(document).ready(function () {
    "use strict";
    
    // Preloader
    // ------------------------------------------------------
    $(window).on('load', function () {
        setTimeout(function () {
            $("#loader").fadeOut(200);
        }, 200);
    });

    // Main Sliders
    // ------------------------------------------------------
    var $this = $('.site-slider'),
        slider = $this.find('.owl-carousel');

    if ($this.hasClass('modern-layout')) {
        slider.owlCarousel({
            items: 1,
            dots: false,
            navText: ['Prev', 'Next'],
            navContainer: '#slider-nav'
        });
    } else if ($this.hasClass('two-cols')) {
        slider.owlCarousel({
            items: 2,
            dots: false,
            margin: 4
        });
    } else if ($this.hasClass('three-cols')) {
        slider.owlCarousel({
            items: 3,
            dots: false,
            margin: 4
        });
    } else if ($this.hasClass('four-cols')) {
        slider.owlCarousel({
            items: 4,
            dots: false,
            margin: 4
        });
    }
    
    slider.owlCarousel({
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        autoHeight: true,
        loop: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 0,
        dots: true,
        smartSpeed: 450,
        navText: ['Prev', 'Next'],
        navContainer: '#slider-nav',
        dotsContainer: '#slider-dots'
    });

    // Custom Main Slider Navigation
    $('.next').on('click', function () {
        slider.trigger('.owl-next');
    })
    $('.prev').on('click', function () {
        slider.trigger('.owl-prev');
    })

    // Trending Carousel Slider
    $('.site-trending .owl-carousel').owlCarousel({
        items: 5,
        margin: 30,
        autoplay: true,
        autoplayHoverPause: true,
        dots: false,
        smartSpeed: 450,
        dots: true,
        dotsContainer: '#trending-dots',
        responsive: {
            0: {
                items: 1,
                margin: 10,
            },
            640: {
                items: 2,
                margin: 40,
            },
            960: {
                items: 3,
                margin: 40,
            },
            1200: {
                items: 4,
                margin: 40,
            },
            1600: {
                items: 5,
                margin: 10,
            }
        }
    });

});