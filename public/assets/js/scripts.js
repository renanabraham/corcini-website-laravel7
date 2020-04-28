$(function () {
    //################## CLICK POSTS MENU
    $('.j-click-btn').click(function () {
        $('.j-click-btn-content').slideToggle(1000);
    });

    $('.j-click-btn1').click(function () {
        $('.j-click-btn-content1').slideToggle(1000);
    });

    $('.j-click-btn2').click(function () {
        $('.j-click-btn-content2').slideToggle(1000);
    });

    $('.j-click-btn3').click(function () {
        $('.j-click-btn-content3').slideToggle(1000);
    });
    $('.j-click-btn4').click(function () {
        $('.j-click-btn-content4').slideToggle(1000);
    });
    $('.j-click-btn5').click(function () {
        $('.j-click-btn-content5').slideToggle(1000);
    });
    $('.j-click-btn6').click(function () {
        $('.j-click-btn-content6').slideToggle(1000);
    });


    //################## MENU
    $('.menu').click(function () {
        $('.nav').fadeIn(1000);
    });
    $('.close_menu').click(function () {
        $('.nav').fadeOut(500);
    });


    //################## LOGO FADEIN & FADEOUT
    var home = $('.home').length;
    var about = $('.about').length;
    if (home) {
        console.log('tem a classe');
        $('.go_out_in_1170').removeClass('ds-none');
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
    } else {
        console.log('no class');
    }
    if (about) {
        console.log('tem a classe');
        $(window).scroll(function () {
            if ($(this).scrollTop() > $('.about').outerHeight() * 2) {
                $('.logo_fix').fadeOut(800, function () {
                    $('.j_logo_dark').fadeIn(5000);
                });
            }
            if ($(this).scrollTop() < $('.about').outerHeight() * 2) {
                $('.logo_fix').fadeIn(1000, function () {
                    $('.j_logo_dark').fadeOut(1);
                });
            }
        });
    } else {
        console.log('no class');
    }


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
