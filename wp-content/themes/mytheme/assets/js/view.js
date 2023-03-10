jQuery(document).ready(function () {
    AOS.init();
    jQuery('.js-pagetop').on('click tap', function() {
        jQuery('body, html').animate({
            scrollTop: 0
        }, 300, 'swing');
    });

    // anchor loading hash location
    jQuery('a').on('click tap', function(e) {
        var ref = location.href;
        var url = jQuery(this).attr('href');

        if( ref.indexOf(url.replace(/#.*$/, '')) != -1 && url.indexOf('#') != -1 ) {

            var speed = 300;
            var href= url.match(/#.*$/);
            var target = jQuery(href[0]);
            var position = target.offset().top - jQuery('#js-header').outerHeight();
            jQuery('body, html').animate({ scrollTop: position }, speed, 'linear', function(){
                var nowpos = target.offset().top - jQuery('#js-header').outerHeight();
                if(nowpos != position){
                    jQuery('body, html').animate({ scrollTop: nowpos }, 10, 'linear');
                }
            });
            return false;
        }

    });
})
jQuery(window).on('load scroll', function () {

    if (jQuery('#js-header')[0]) {
        var h = jQuery(window).height();
        var scrollTop = jQuery(window).scrollTop();
        jQuery('#js-header.is-page').addClass('is-fixed');
        if (scrollTop > h / 2) {
            jQuery('#js-header.is-home').addClass('is-fixed');
        } else {
            jQuery('#js-header.is-home').removeClass('is-fixed');
        }
    }

    if (jQuery('.js-pagetop')[0]) {
        // var h = jQuery(window).height();
        // var scrollTop = jQuery(window).scrollTop();
        if (scrollTop > h / 2) {
            jQuery('.js-pagetop').addClass('is-active');
        } else {
            jQuery('.js-pagetop').removeClass('is-active');
        }
    }

});


jQuery(window).on('load', function () {
    jQuery('.js-menu-toggle').on('click tap', function() {
        var status = jQuery('body').attr('data-menu');
        if( status == 'active' ) {
            jQuery('body').attr('data-menu', '');
            jQuery('body').attr('data-bodyfixed', 'false');
        } else {
            jQuery('body').attr('data-menu', 'active');
            jQuery('body').attr('data-bodyfixed', 'true');
        }
    });
    jQuery('body').attr('data-status', 'loaded');
    if (jQuery('.mySwiper')[0]) {
        new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
    if (jQuery('.sw-thumb-slider')[0]) {
        new Swiper('.sw-thumb-slider', {
            loop: true,
            speed: 700,
            slidesPerView: 1.2,
            effect: 'slide',
            loopAdditionalSlides: 3,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                767: {
                    slidesPerView: 1.18,
                }
            },
            navigation: {
                nextEl: '.sw-thumb-btn-prev',
                prevEl: '.sw-thumb-btn-next',
            },
        });
    }
    if( jQuery('#js-picture-slider')[0] ) {
        new Swiper('#js-picture-slider', {
            loop: true,
            speed: 500,
            slidesPerView: 1,
            effect: 'fade',
            loopAdditionalSlides: 1,
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: '.sw-btn-prev',
                prevEl: '.sw-btn-next',
            },
        });
    }
});


jQuery(window).on('load resize', function () {
    if (jQuery('.home-case__column')[0]) {
        var jQuerycase_slide_size = jQuery('.home-case__column').innerWidth();
        jQuery('.home-grid-picture__overlay').css('height', jQuerycase_slide_size + 'px');
    }

    if (jQuery('.home-blog__contents')[0]) {
        var jQueryblog_arrow_height = jQuery('.sw-article-summary .c-article-thumb').innerHeight() / 2;
        var jQueryblog_arrow_width = jQuery('.sw-article-summary .c-article-thumb').innerWidth();
        // console.log(jQueryblog_arrow_height);
        // console.log(jQueryblog_arrow_width);
        jQuery('.sw-article-btn').css({
            'width': jQueryblog_arrow_width,
            'top': jQueryblog_arrow_height
        });
    }

    if (jQuery('#js-intro-thumb-slide')[0]) {
        var jQueryintro_btn_width = jQuery('.sw-thumb-btn').innerWidth() / 2;
        var jQueryintro_slide_width = jQuery('.sw-thumb-slider__item').innerWidth();
        var jQuerybtn_position = jQueryintro_slide_width - jQueryintro_btn_width;
        // console.log(jQueryblog_arrow_height);
        // console.log(jQueryblog_arrow_width);
        jQuery('.sw-thumb-btn').css({
            'left': jQuerybtn_position
        });
    }

    // anchor loading hash location
    if (location.hash && jQuery(location.hash)[0]) {

        var hash = location.hash;
        setTimeout(function () {
            jQuery('body, html').animate({scrollTop: jQuery(hash).offset().top - jQuery('#js-header').outerHeight()}, 0, 'linear');
        }, 300);

    }

});

jQuery('.js-location').on('click', function () {
    if (jQuery(this).attr('href').indexOf('#')) {
        jQuery('body').attr('data-menu', '');
        jQuery('body').attr('data-bodyfixed', 'false');
    }
})