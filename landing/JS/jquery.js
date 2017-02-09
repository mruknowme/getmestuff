$(function() {

    $(".owl-carousel").owlCarousel({
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
            $('#linkone svg').css('fill', 'rgb(201, 219, 225)');
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
        $('.jumpto span').css('color', 'rgb(201, 219, 225)');
        $('.jumpto svg').css('stroke', 'rgb(201, 219, 225)');
        $('.toolone').css('opacity', '1');
        $('.tooltwo').css('opacity', '0');
        $('.toolthree').css('opacity', '0');
        $('.toolfour').css('opacity', '0');
        $('#linkone svg').css('fill', 'rgb(201, 219, 225)');
        $('#linktwo svg').css('fill', 'transparent');
        $('#linkthree svg').css('fill', 'transparent');
        $('#linkfour svg').css('fill', 'transparent');

        $('#linkone').hover(function() {
            $('.toolone').css('opacity', '1');
            $('#linkone svg').css('fill', 'rgb(201, 219, 225)');
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
        }, function() {
            $('.toolthree').css('opacity', '0');
            $('#linkthree svg').css('fill', 'transparent');
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

});


$().ready(function() {
    $('#singupform').validate({
        rules: {
            firstname: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            lastname: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 8
            },
            passcheck: {
                required: true,
                minlength: 8,
                equalTo: '.sign #pass'
            }
        },
        messages: {
            firstname: {
                required: 'Please enter your First Name',
                minlength: 'First Name be at least 2 charachters long',
                maxlength: 'Your First Name must not exceed 20 charachters'
            },
            lastname: {
                required: 'Please enter your Last Name',
                minlength: 'Last Name be at least 2 charachters long',
                maxlength: 'Your Last Name must not exceed 20 charachters'
            },
            email: {
                required: 'Please enter your email',
                email: 'Please enter a valid email address'
            },
            pass: {
                required: 'Please provide a password',
                minlength: 'Your password must be at least 8 charachters long',
            },
            passcheck: {
                required: 'Please confirm your password',
                minlength: 'Your passwords don\'t match',
                equalTo: 'Your passwords don\'t match',
            }
        },
        errorElement: 'div',
        errorClass: 'errortxt',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    $('#loginform').validate({
        errorElement: 'div',
        errorClass: 'errortxt',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    $('#edit').validate({
        rules: {
            firstname: {
                required: false,
                minlength: 2,
                maxlength: 20
            },
            lastname: {
                required: false,
                minlength: 2,
                maxlength: 20
            },
            email: {
                required: false,
                email: true
            },
            paswd: {
                required: false,
                minlength: 2
            },
            currentpaswd: {
                required: true
            }
        },
        messages: {
            firstname: {
                minlength: 'First Name must at leats 2 charachters long',
                maxlength: 'First name must not exceed 20 charachters'
            },
            lastname: {
                minlength: 'Last Name must at leats 2 charachters long',
                maxlength: 'Last name must not exceed 20 charachters'
            },
            email: {
                email: 'Please provide a valid email'
            },
            paswd: {
                minlength: 'Password must at leats 8 charachters long',
            },
            currentpaswd: {
                required: 'Please enter your current password'
            }
        },
        errorElement: 'div',
        errorClass: 'errortxt',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    $('#credit').validate({
        rules: {
            methodcard: {
                required: true,
                maxlength: false
            },
            holdername: {
                required: true,
                maxlength: false
            },
            mmyy: {
                required: true,
                maxlength: false
            },
            cc: {
                required: true,
                maxlength: false
            }
        },
        messages: {
            methodcard: {
                required: 'Please enter card number'
            },
            holdername: {
                required: 'Please enter cardholder\'s name'
            },
            mmyy: {
                required: 'Please enter expiry date'
            },
            cc: {
                required: 'Please enter security code'
            }
        },
        errorElement: 'div',
        errorClass: 'errortxtcard',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    $('#shipment').validate({
        rules: {
            yourwish: {
                required: true
            },
            linkwish: {
                required: true,
                url: true
            },
            streetone: {
                required: true
            },
            streettwo: {
                required: false
            },
            city: {
                required: true
            },
            zip: {
                required: true
            },
            country: {
                required: true
            }
        },
        messages: {
            yourwish: {
                required: 'Please enter your wish'
            },
            linkwish: {
                required: 'Please enter a link to your wish',
                url: 'Please enter a valid url (including http://)'
            },
            streetone: {
                required: 'Please provide your address'
            },
            city: {
                required: 'Please enter your city name'
            },
            zip: {
                required: 'Please enter your zip code'
            },
            country: {
                required: 'Please enter your country'
            }
        },
        errorElement: 'div',
        errorClass: 'errortxtaddress',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    $('.address input').focusin(function(){
        $('.address i').addClass('spinthingY');
    });

    $('body').click(function( event ) {
        var target = $(event.target);
        if (!target.is('.address input')) {
            $('.address i').removeClass('spinthingY');
        }
    });

    $('.confirm input').focusin(function(){
        $('.confirm .willspin').addClass('spinthing');
    });

    $('.confirm input').focusout(function(){
        $('.confirm .willspin').removeClass('spinthing');
    });

    $('.dropdown').click(function(){
        $('#paymentmethod').toggle();
    });

    $('body').click(function( event ) {
        var target = $(event.target);
        if (!target.is('.dropdown, .currenttitle')) {
            $('#paymentmethod').hide();
        }
    });

    /* $('.tab').addClass('notransition');

    setTimeout(function(){
        $('.tab').removeClass('notransition');
    }, 2000); */

    $('.tab').click(function(){
        if(!$(this).hasClass('active')) {
            $('.tab').toggleClass('active');
            $('.formcontent').toggle();
        }
    });

    var hash = document.location.hash;

    $(window).on('hashchange',function(){
        hash = document.location.hash;
        if(hash == '#login') {
            $('.tab').toggleClass('active');
            $('.form').addClass('lengththreesixnine');
            $('.sign').toggle();
            setTimeout(function(){
                $('#login').fadeIn();
            }, 401);
            setTimeout(function(){
                $('.form').removeClass('lengththreesixnine');
            }, 401);
        } else {
            $('.tab').toggleClass('active');
            $('.form').addClass('lengthfivetwoone');
            $('.login').toggle();
            setTimeout(function(){
                $('#signup').fadeIn();
            }, 401);
            setTimeout(function(){
                $('.form').removeClass('lengthfivetwoone');
            }, 401);
        }
    });

    if(hash == '#login') {
        $('.two').addClass('active');
        $('.form').addClass('lengththreesixnine');
        setTimeout(function(){
            $('#login').fadeIn();
        }, 401);
        setTimeout(function(){
            $('.form').removeClass('lengththreesixnine');
        }, 401);
    } else {
        $('.one').addClass('active');
        $('.form').addClass('lengthfivetwoone');
        setTimeout(function(){
            $('#signup').fadeIn();
        }, 401);
        setTimeout(function(){
            $('.form').removeClass('lengthfivetwoone');
        }, 401);
    }
});
