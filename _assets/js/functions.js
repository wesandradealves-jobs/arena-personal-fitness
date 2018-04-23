jQuery(document).ready(function () {



    $('.telefone').mask('(99) 9 9999-9999');



    $(".mobile--navigation .hidden-xs").each(function () {



        $(this).removeClass("hidden-xs");



    });



    $('.owl--cnnat').owlCarousel({



        loop: false,



        navText: ["<", ">"],



        nav: true,



        dots: false,



        responsive: {



            0: {



                items: 1,



                nav: false,



                dots: true



            },



            768: {



                items: 2,



                nav: true,



                dots: false



            },



            1366: {



                items: 3,



                nav: true,



                dots: false



            }



        }



    });



    $('.owl--blog').owlCarousel({



        loop: false,



        navText: ["<", ">"],



        nav: true,



        dots: false,



        responsive: {



            0: {



                items: 1,



                nav: false,



                dots: true



            },



            768: {



                items: 1,



                nav: true,



                dots: false



            },



            1366: {



                items: 2,



                nav: true,



                dots: false



            }



        }



    });



    $('.owl--maln').owlCarousel({



        loop: false,



        video: true,



        items: 1,



        autoWidth: false,



        navText: ["<", ">"],



        nav: false,



        dots: true,



        responsive: {



            // breakpoint from 0 up



            0: {



                nav: false



            },



            // breakpoint from 768 up



            1025: {



                nav: true



            }



        }



    });



    $("[data='scrolldown']").click(function () {



        $('html, body').stop(true, false).animate({



            scrollTop: $("#" + $(this).closest("section").next("section").attr("id")).offset().top



        }, 1000);



    });



    // CNNAT__slide--content



    $(".glyphicon.glyphicon-menu-hamburger").click(function () {



        $(this).toggleClass("toggle");



        $(".mobile--navigation").toggleClass("toggle");



        if ($(this).is(".toggle")) {



            $(this).removeClass("glyphicon-menu-hamburger").addClass("glyphicon-remove");



        } else {



            $(this).addClass("glyphicon-menu-hamburger").removeClass("glyphicon-remove");



        }



    });



    $("header").before($("header").clone().addClass("sticky"));



    $(window).on("scroll", function () {



        $(".sticky").toggleClass("stuck", ($(window).scrollTop() > 49));



    });



    $(window).on("resize", function () {



        $(".toggle").removeClass("toggle");



        $("header .glyphicon").addClass("glyphicon-menu-hamburger").removeClass("glyphicon-remove");



    });



    $(window).on('scroll', function() {

        $('.pg-home section').each(function() {

            if($(window).scrollTop() >= $(this).offset().top-85) {

                $('header nav a').parent().removeClass('active');

                $('header nav a[data-url="#'+ $(this).attr('id') +'"]').parent().addClass('active');

            }

        });

    });

});



