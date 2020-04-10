$(function () {
    //################## CLICK POSTS MENU
    $('.j-click-btn').click(function () {
        $('.j-click-btn-content').slideToggle(1000);
    });

    //################## MENU
    $('.menu').click(function () {
       $('.nav').fadeIn(1000);
    });
    $('.close_menu').click(function () {
       $('.nav').fadeOut(500);
    });


    //################## LOGO FADEIN & FADEOUT
    $(window).scroll(function () {
        if ($(this).scrollTop() > $('.j_logo_position').outerHeight() * 2) {
            $('.logo_fix').fadeOut(800, function () {
                $('.j_logo_dark').fadeIn(5000);
            });
        }
        if ($(this).scrollTop() < $('.j_logo_position').outerHeight() * 2) {
            $('.logo_fix').fadeIn(1000, function () {
                $('.j_logo_dark').fadeOut(1);
            });
        }
    });
    //############## GOTO CORE
    $('.wc_goto').click(function () {
        var Goto = $($(this).attr("href"));
        if (Goto.length) {
            $('html, body').animate({scrollTop: Goto.offset().top}, 1000);
        } else {
            $('html, body').animate({scrollTop: 0}, 800);
        }
        return false;
    });

    //############## SERVICES TABS
    $('.ac-title').on('click', function () {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            var cross = $('.active > img[class=\'cross ds-none\']');
            var plus = $('.active > img[class=\'plus\']');
            cross.removeClass('ds-none');
            plus.addClass('ds-none');
        } else {
            $(this).removeClass('active');
            $("img[class='cross']").addClass('ds-none');
            $("img[class='plus ds-none']").removeClass('ds-none');
        }
    });
});