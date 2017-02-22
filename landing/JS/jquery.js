$(function() {

    $(".owl-carousel").owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: true
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

    $('#forgotform').validate({
        rules: {
            mailf: {
                required: true,
                email: true
            }
        },
        messages: {
            mailf: {
                required: 'This field is required',
                email: 'Please provide a valid email'
            }
        },
        errorElement: 'div',
        errorClass: 'errortxtpass',
        highlight: function(element, errorClass, validClass) {
            return false;
        }
    });

    var hash = document.location.hash;

    $(window).on('hashchange',function(){
        hash = document.location.hash;
        if(hash == '#login' && $('.login').is(':hidden')) {
            $('.two').addClass('active');
            $('.one').removeClass('active');
            $('.sign').fadeOut(100);
            setTimeout(function(){
                $('.form').css('height', '367px');
            }, 100);
            setTimeout(function(){
                $('#login').fadeIn(100);
            }, 400);
        } else if(hash == '#signup' && $('.sign').is(':hidden')) {
            $('.one').addClass('active');
            $('.two').removeClass('active');
            $('.login').fadeOut(100);
            setTimeout(function(){
                $('.form').css('height', '521px');
            }, 100);
            setTimeout(function(){
                $('#signup').fadeIn(100);
            }, 400);
        }
    });

    $(function(){
        if(hash == '#login') {
            $('.two').addClass('active');
            $('.form').addClass('lengththreesixnine');
            setTimeout(function(){
                $('#login').fadeIn();
            }, 401);
            setTimeout(function(){
                $('.form').removeClass('lengththreesixnine');
            }, 401);
            setTimeout(function(){
                $('.form').css('height', '367px');
            }, 402);
        } else if(hash == '#signup') {
            $('.one').addClass('active');
            $('.form').addClass('lengthfivetwoone');
            setTimeout(function(){
                $('#signup').fadeIn();
            }, 401);
            setTimeout(function(){
                $('.form').removeClass('lengthfivetwoone');
            }, 401);
            setTimeout(function(){
                $('.form').css('height', '521px');
            }, 402);
        }
    });

    /* $('.tab').click(function(event){
        var tabtarget = $(event.target);
        if(!tabtarget.hasClass('active')) {
            $('.tab').toggleClass('active');
            $('.formcontent').toggle();
        }
    }); */

    $('.tab').click(function(event){
        var tabtarget = $(event.target);
        var tabid = tabtarget.attr('data-tab');
        if(tabid == 'login' && !tabtarget.hasClass('active')) {
            $('.tab').toggleClass('active');
            $('#signup').fadeOut(100);
            setTimeout(function(){
                $('.form').css('height', '367px');
            }, 100);
            setTimeout(function(){
                $('#login').fadeIn();
            }, 400);
        } else if(tabid == 'signup' && !tabtarget.hasClass('active'))  {
            $('.tab').toggleClass('active');
            $('#login').fadeOut(100);
            setTimeout(function(){
                $('.form').css('height', '521px');
            }, 100);
            setTimeout(function(){
                $('#signup').fadeIn();
            }, 400);
        }
    });
    
    $('.forgot p').click(function(event){
        var x;
        if(!$('div.getpass').hasClass('opengetpass')) {
            x = event.pageX - $('div.forgot').offset().left + 88;
            $('div.arrow').css('left', x);
            $('div.getpass').removeClass('closegetpass');
            $('div.getpass').show();
            $('div.getpass').addClass('opengetpass');
        } else {
            $('div.getpass').removeClass('opengetpass');
            $('div.getpass').addClass('closegetpass');
            setTimeout(function(){
                $('div.getpass').hide();
            }, 300);
            setTimeout(function(){
                $('.getpass form').removeClass('flyout');
                $('.getpass form').removeClass('flyout');
                $('.getpass form').show();
                $('.getpass .done').hide();
            }, 301);
        }
    });

    $('.getpass form button').click(function(){
        var value = $('#mailf').val();
        var error = $('.errortxtpass').is(':visible');
        if(error || !value) {
        } else {
            $('.getpass form').addClass('flyout');
            setTimeout(function(){
                $('.getpass form').hide();
            }, 500);
            setTimeout(function(){
                $('.getpass .done').show();
                $('.getpass .done').addClass('flyin');
            }, 100);
        }
    });

    $('body').click(function( event ) {
        var target = $(event.target);
        if (!target.is('.getpass lable, div.forgot p, .getpass input, .getpass button')) {
            $('div.getpass').removeClass('opengetpass');
            $('div.getpass').addClass('closegetpass');
            setTimeout(function(){
                $('div.getpass').hide();
            }, 300);
            setTimeout(function(){
                $('.getpass form').removeClass('flyout');
                $('.getpass form').removeClass('flyout');
                $('.getpass form').show();
                $('.getpass .done').hide();
            }, 301);
        }
    });

});