$(function () {
    //################## CLICK POSTS MENU
    //FAZER UMA MELHORA. COLOCAR 1 AO 7 PRA NAO FAZER CONFLITO COM O MENU ASIDE
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
    $('.j-click-btn7').click(function () {
        $('.j-click-btn-content7').slideToggle(1000);
    });
    $('.j-click-btn8').click(function () {
        $('.j-click-btn-content8').slideToggle(1000);
    });


    //################## MENU
    $('.menu').click(function () {
        $('.nav').fadeIn(1000);
    });
    $('.close_menu').click(function () {
        $('.nav').fadeOut(500);
    });

    //################## PAGE EFFECTS
    var home = $('.home').length; //OK
    var profile = $('.profile').length; //OK
    var services = $('.services').length; //OK

    // HOME PAGE OK
    if (home) {
        $('.go_out_in_1170').removeClass('ds-none');

        $(window).scroll(function () {

            //TROCA A COR DO ICONE MENU
            if ($(this).scrollTop() > $('.slides_container').outerHeight() * 3 + $('.services_container').outerHeight() - 100) {
                $('.j-img-menu').fadeOut(function () {
                    $('.j-img-wine').fadeIn();
                });
            }

            if ($(this).scrollTop() < $('.slides_container').outerHeight() * 3 + $('.services_container').outerHeight() - 100) {
                $('.j-img-wine').fadeOut(function () {
                    $('.j-img-menu').fadeIn();
                });
            }

            //JOGO DO LOGO MOBILE E DESK
            if ($(this).scrollTop() > $('.j_logo_position').outerHeight() * 2) {
                $('.logo_fix').fadeOut(800, function () {
                    $('.j_logo_dark').fadeIn(5000);
                });

            }
            if ($(this).scrollTop() < $('.j_logo_position').outerHeight() * 2) {
                $('.logo_fix').fadeIn(1000, function () {
                });
            }

            //linha do social da home
            if ($(this).scrollTop() > $('.j_logo_position').outerHeight() * 3.1) {
                $('.line_yellow').fadeOut(function () {
                    $('.line_wine').fadeIn();
                });
            }

            if ($(this).scrollTop() < $('.j_logo_position').outerHeight() * 3.1) {
                $('.line_wine').fadeOut(function () {
                    $('.line_yellow').fadeIn();
                });
            }

            //LOGO MOBILE
            if ($(this).scrollTop() > $('.logo_for_mobile').outerHeight() * 1) {
                $('.logo_for_mobile ').fadeOut();
            }
            // if ($(this).scrollTop() < $('.logo_for_mobile').outerHeight() * 1) {
            //     $('.logo_for_mobile ').fadeIn();
            // }
        });
    }

    // PROFILE PAGE OK
    if (profile) {
        $(window).scroll(function () {
            //TROCA A COR DO ICONE MENU
            if ($(this).scrollTop() > $('.about_header').outerHeight() && $(this).scrollTop() < $('.about_header').outerHeight() + $('.about_pics').outerHeight() + $('.about_content').outerHeight() + $('.jjj').outerHeight() + $('.about_social_links').outerHeight() + $('.services_container').outerHeight()) {
                $('.j-img-menu').fadeOut(function () {
                    $('.j-img-sand').fadeIn();
                });
            }
            if ($(this).scrollTop() < $('.about_header').outerHeight()) {
                $('.j-img-sand').fadeOut(function () {
                    $('.j-img-menu').fadeIn();
                });
            }
            if ($(this).scrollTop() > $('.about_header').outerHeight() + $('.about_pics').outerHeight() + $('.about_content').outerHeight() + $('.jjj').outerHeight() + $('.about_social_links').outerHeight() + $('.services_container').outerHeight()) {
                $('.j-img-sand').fadeOut(function () {
                    $('.j-img-menu').fadeIn();
                });
            }

            //TROCA COR DO TEXTO MENU
            if ($(this).scrollTop() > $('.about_header').outerHeight() + $('.about_pics').outerHeight()) {
                $('.j-chance-color').css('color', 'd3bc8d');
            }

            if ($(this).scrollTop() < $('.about_header').outerHeight() + $('.about_pics').outerHeight()) {
                $('.j-chance-color').css('color', 'ffffff');
            }

            if ($(this).scrollTop() > $('.about_header').outerHeight() + $('.about_pics').outerHeight() + $('.about_content').outerHeight() + $('.jjj').outerHeight() + 180) {
                $('.j-chance-color').css('color', 'ffffff');
            }


        });
    }

    //SERVICES PAGE OK
    if (services) {
        $(window).scroll(function () {
            //TROCAR COR DO MENU E DA IMAGEM DO MENU
            if ($(this).scrollTop() > $('.posts_header').outerHeight() * 1) {
                $('.j-chance-color').css('color', 'd3bc8d');
            }
            if ($(this).scrollTop() < $('.posts_header').outerHeight() * 1) {
                $('.j-chance-color').css('color', 'white');
            }
            if ($(this).scrollTop() > $('.posts_header').outerHeight() + $('.posts_and_aside_container').outerHeight()) {
                $('.j-img-menu').fadeOut(function () {
                    $('.j-img-sand').fadeIn();
                });
            } else {
                $('.j-img-sand').fadeOut(function () {
                    $('.j-img-menu').fadeIn();
                });
            }
            //linha do social da services
            if ($(this).scrollTop() > $('.posts_header').outerHeight() + $('.posts_container').outerHeight()) {
                $('.line_wine').fadeOut(function () {
                    $('.line_yellow').fadeIn();
                });
            }

            if ($(this).scrollTop() < $('.posts_header').outerHeight() + $('.posts_container').outerHeight()) {
                $('.line_yellow').fadeOut(function () {
                    $('.line_wine').fadeIn();
                });
            }
        });
    }
    //SERVICES PAGE OK


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


