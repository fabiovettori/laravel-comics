require('./bootstrap');

var $ = require('jquery');

$(document).ready(function(){

    const headerHeight = $('header').outerHeight();
    $('header').css({top: -headerHeight + 'px'});

    const topBannerHeigh = $('#top-banner').outerHeight();

    let direction = 1;
    let lastScrollTop = 0;

    $(window).scroll(function(){
        userScroll = $(this).scrollTop();

        if (userScroll < lastScrollTop && userScroll > headerHeight) {
            direction = -1;
            $('header').css({top: -topBannerHeigh + 'px'});
        } else if (userScroll < lastScrollTop){
            direction = -1;
            $('header').css({top: 0 + 'px'});
        } else {
            direction = 1;
            $('header').css({top: -headerHeight + 'px'});
        }

        lastScrollTop = userScroll <= 0 ? 0 : userScroll;
    });
});
