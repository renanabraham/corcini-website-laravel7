$(function () {
    // //teclado
    // var down = 40;
    // var up = 38;
    // var slide = $('.j_slide');
    //
    // function go() {
    //     var of0 = slide.eq(0).offset();
    //     var of1 = slide.eq(1).offset();
    //     var of2 = slide.eq(2).offset();
    //     if (slide.eq(0).offset().top = of0) {
    //         $('html, body').animate({scrollTop: of1.top}, 1000);
    //     }
    //     if (slide.eq(1).offset().top = of1) {
    //         $('html, body').animate({scrollTop: of2.top}, 1000);
    //     }
    // }
    //
    // $(window).keydown(function (e) {
    //     if (e.keyCode === 40) {
    //         go();
    //     }
    // });


    //EVENTO AS IMAGENS SLIDES
    $(window).scroll(function () {
        if ($(this).scrollTop() > $('.teste').outerHeight() / 2) {
            $('slide2').fadeOut(1000);
        }

    });
    //EVENTO DE SCROLL LOGO
    $(window).scroll(function () {
        if ($(this).scrollTop() > $('.teste').outerHeight() * 2) {
            $('.logo_fix').fadeOut(800, function () {
                $('.j_logo_dark').fadeIn(5000);
            });
        }
        if ($(this).scrollTop() < $('.teste').outerHeight() * 2) {
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

    //tabs
    $('.discovery_item_header').on('click', function () {
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