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
                $('.form').css('height', '447px');
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
                $('.form').css('height', '601px');
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
                $('.form').css('height', '447px');
            }, 100);
            setTimeout(function(){
                $('#login').fadeIn();
            }, 400);
        } else if(tabid == 'signup' && !tabtarget.hasClass('active'))  {
            $('.tab').toggleClass('active');
            $('#login').fadeOut(100);
            setTimeout(function(){
                $('.form').css('height', '601px');
            }, 100);
            setTimeout(function(){
                $('#signup').fadeIn();
            }, 400);
        }
    });
    
    $('.forgot p').click(function(event){
        var x;
        var width = $(window).width(); 
        if(!$('div.getpass').hasClass('opengetpass') && width > 768) {
            x = event.pageX - $('div.forgot').offset().left + 52;
            $('div.arrow').css('left', x);
            $('div.getpass').removeClass('closegetpass');
            $('div.getpass').show();
            $('div.getpass').addClass('opengetpass');
        } else if($('div.getpass').hasClass('opengetpass') && width > 768) {
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

    $('.forgot p').click(function(event){
        var width = $(window).width();
        if(width <= 770) {
            $('div.getpass').fadeToggle();
            $('div.overlay').fadeToggle();
        }
    });

    $('.getpass .close').click(function(){
        var width = $(window).width();
        if(width <= 770) {
            $('div.getpass').fadeToggle();
            $('div.overlay').fadeToggle();
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
        var width = $(window).width(); 
        if (!target.is('.getpass lable, div.forgot p, .getpass input, .getpass button') && width > 768) {
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

    $('.openmenu').click(function(){
        $('.mobilenavwrapper').toggleClass('siderbar');
        $('.openmenu').toggleClass('siderbartoggler');
    });

});