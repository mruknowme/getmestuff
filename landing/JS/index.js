$(function() {
    $('.moreinfo').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });

    $('#mainsection').waypoint(function(direction) {
        $('.toolone').css('opacity', '0');
        $('#linkone svg').css('fill', 'transparent');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', '#ccccf0');
        }, function() {
            $('.toolone').css('opacity', '0');
            $('#linkone svg').css('fill', 'transparent');
        });

        $('#linktwo').hover(function() {
            $('.tooltwo').css('opacity', '1');
        }, function() {
            $('.tooltwo').css('opacity', '0');
        });

        $('#linkthree').hover(function() {
            $('.toolthree').css('opacity', '1');
        }, function() {
            $('.toolthree').css('opacity', '0');
        });

        $('#linkfour').hover(function() {
            $('.toolfour').css('opacity', '1');
        }, function() {
            $('.toolfour').css('opacity', '0');
        });

    }, {
        offset: '8%'
    });

    $('#how').waypoint(function() {
        $('.jumpto span').css('color', '#ccccf0');
        $('.jumpto svg').css('stroke', '#ccccf0');
        $('.toolone').css('opacity', '1');
        $('.tooltwo').css('opacity', '0');
        $('.toolthree').css('opacity', '0');
        $('.toolfour').css('opacity', '0');
        $('#linkone svg').css('fill', '#ccccf0');
        $('#linktwo svg').css('fill', 'transparent');
        $('#linkthree svg').css('fill', 'transparent');
        $('#linkfour svg').css('fill', 'transparent');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', '#ccccf0');
        });

        $('#linktwo').hover(function() {
            $('.tooltwo').css('opacity', '1');
            $('#linktwo svg').css('fill', '#ccccf0');
        }, function() {
            $('.tooltwo').css('opacity', '0');
            $('#linktwo svg').css('fill', 'transparent');
        });

        $('#linkthree').hover(function() {
            $('.toolthree').css('opacity', '1');
            $('#linkthree svg').css('fill', '#ccccf0');
        }, function() {
            $('.toolthree').css('opacity', '0');
            $('#linkthree svg').css('fill', 'transparent');
        });

        $('#linkfour').hover(function() {
            $('.toolfour').css('opacity', '1');
            $('#linkfour svg').css('fill', '#ccccf0');
        }, function() {
            $('.toolfour').css('opacity', '0');
            $('#linkfour svg').css('fill', 'transparent');
        });

    }, {
        offset: '1%'
    });

    $('#who').waypoint(function() {
        $('.jumpto span').css('color', 'black');
        $('.jumpto svg').css('stroke', 'black');
        $('.toolone').css('opacity', '0');
        $('.tooltwo').css('opacity', '1');
        $('.toolthree').css('opacity', '0');
        $('.toolfour').css('opacity', '0');
        $('#linkone svg').css('fill', 'transparent');
        $('#linktwo svg').css('fill', 'black');
        $('#linkthree svg').css('fill', 'transparent');
        $('#linkfour svg').css('fill', 'transparent');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', 'black');
        }, function() {
            $('.toolone').css('opacity', '0');
            $('#linkone svg').css('fill', 'transparent');
        });

        $('#linktwo').hover(function() {
            $('.tooltwo').css('opacity', '1');
            $('#linktwo svg').css('fill', 'black');
        });

        $('#linkthree').hover(function() {
            $('.toolthree').css('opacity', '1');
            $('#linkthree svg').css('fill', 'black');
        }, function() {
            $('.toolthree').css('opacity', '0');
            $('#linkthree svg').css('fill', 'transparent');
        });

        $('#linkfour').hover(function() {
            $('.toolfour').css('opacity', '1');
            $('#linkfour svg').css('fill', 'black');
        }, function() {
            $('.toolfour').css('opacity', '0');
            $('#linkfour svg').css('fill', 'transparent');
        });

    }, {
        offset: '1%'
    });

    $('#success').waypoint(function() {
        $('.jumpto span').css('color', 'rgb(201, 219, 225)');
        $('.jumpto svg').css('stroke', 'rgb(201, 219, 225)');
        $('.toolone').css('opacity', '0');
        $('.tooltwo').css('opacity', '0');
        $('.toolthree').css('opacity', '1');
        $('.toolfour').css('opacity', '0');
        $('#linkone svg').css('fill', 'transparent');
        $('#linktwo svg').css('fill', 'transparent');
        $('#linkthree svg').css('fill', 'rgb(201, 219, 225)');
        $('#linkfour svg').css('fill', 'transparent');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', 'rgb(201, 219, 225)');
        }, function() {
            $('.toolone').css('opacity', '0');
            $('#linkone svg').css('fill', 'transparent');
        });

        $('#linktwo').hover(function() {
            $('.tooltwo').css('opacity', '1');
            $('#linktwo svg').css('fill', 'rgb(201, 219, 225)');
        }, function() {
            $('.tooltwo').css('opacity', '0');
            $('#linktwo svg').css('fill', 'transparent');
        });

        $('#linkthree').hover(function() {
            $('.toolthree').css('opacity', '1');
            $('#linkthree svg').css('fill', 'rgb(201, 219, 225)');
        });

        $('#linkfour').hover(function() {
            $('.toolfour').css('opacity', '1');
            $('#linkfour svg').css('fill', 'rgb(201, 219, 225)');
        }, function() {
            $('.toolfour').css('opacity', '0');
            $('#linkfour svg').css('fill', 'transparent');
        });

    }, {
        offset: '1%'
    });

    $('#contact').waypoint(function() {
        $('.jumpto span').css('color', 'black');
        $('.jumpto svg').css('stroke', 'black');
        $('.toolone').css('opacity', '0');
        $('.tooltwo').css('opacity', '0');
        $('.toolthree').css('opacity', '0');
        $('.toolfour').css('opacity', '1');
        $('#linkone svg').css('fill', 'transparent');
        $('#linktwo svg').css('fill', 'transparent');
        $('#linkthree svg').css('fill', 'transparent');
        $('#linkfour svg').css('fill', 'black');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', 'black');
        }, function() {
            $('.toolone').css('opacity', '0');
            $('#linkone svg').css('fill', 'transparent');
        });

        $('#linktwo').hover(function() {
            $('.tooltwo').css('opacity', '1');
            $('#linktwo svg').css('fill', 'black');
        }, function() {
            $('.tooltwo').css('opacity', '0');
            $('#linktwo svg').css('fill', 'transparent');
        });

        $('#linkthree').hover(function() {
            $('.toolthree').css('opacity', '1');
            $('#linkthree svg').css('fill', 'black');
        }, function() {
            $('.toolthree').css('opacity', '0');
            $('#linkthree svg').css('fill', 'transparent');
        });

        $('#linkfour').hover(function() {
            $('.toolfour').css('opacity', '1');
            $('#linkfour svg').css('fill', 'black');
        });

    }, {
        offset: '30%'
    });

    $('.openmenu').click(function(){
        $('.mobilenavwrapper').toggleClass('siderbar');
        $('.openmenu').toggleClass('siderbartoggler');
    });

    /*$(window).on('resize', function(){
        var win = $(this);
        if (win.width() <= 670) { 
            $('.successwrapper').addClass('owl-carousel owl-theme');
            $('.successwrapper .success').addClass('item');
            $('.successwrapper').owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
            });
        } else {
            $('.successwrapper').removeClass('owl-carousel owl-theme');
            $('.successwrapper .success').removeClass('item');
        }
    });*/

    $(function(){
        var width = $(window).width();
        if(width <= 670) {
            $('.successwrapper').addClass('owl-carousel owl-theme');
            $('.successwrapper .success').addClass('item');
            $('.successwrapper').owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
            });
        }
    });
});
