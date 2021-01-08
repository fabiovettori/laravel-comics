require('./bootstrap');

var $ = require('jquery');
var dayjs = require('dayjs');

$(document).ready(function(){

    // gestisce la visualizzazione dell'header in funzione della direzione dello scroll dell'utente
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

    // gesione del formato delle date nella scheda comic del singolo fumetto
    const dateInputFormat = $('#sale_date').text();
    const dateOutputFormat = dayjs(dateInputFormat).format('MMM D YYYY');
    $('#sale_date').text(dateOutputFormat);

});
