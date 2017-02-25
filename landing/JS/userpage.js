$(function(){
    var slider;

    $(function(){
        var i;
        var length = $('.badgewrapper .radial').length;
        slider = [];
        for(i = 1; i <= length; i++) {
            var classname = '.number' + i.toString();
            slider[i] = {
                    sektor: new Sektor(classname, {
                    size: 50,
                    angle: 360,
                    sectorColor: 'rgba(255,255,255,0.7)',
                    circleColor: 'rgba(21,35,225,0)'
                })
            };
        }
    });

    $('.extra').click(function(){
        var current = $('.stars').text();
        if(current < 200) {
            $('.notenough').show();
            $('.notenough').addClass('add');
            setTimeout(function(){
                $('.notenough').removeClass('add');
                $('.notenough').addClass('remove');
            }, 2000);
            setTimeout(function(){
                $('.notenough').hide();
            }, 2500);
        } else {
            $('.cool').show();
            $('.cool').addClass('add');
            setTimeout(function(){
                $('.cool').removeClass('add');
                $('.cool').addClass('remove');
            }, 2000);
            setTimeout(function(){
                $('.cool').hide();
            }, 2500);
        }
    });

    $('body').click(function(event){
        var target = $(event.target);
        if(!target.is('div.badgewrapper, div.badgewrapper span, div.badgewrapper img, div.badgewrapper radial, .Sektor, .Sektor-circle, .Sektor-sector')) {
            $('.einzt').fadeOut();
        }
    });

    $('div.badgewrapper.einz').click(function(event){
        var width = $(window).width();
        if($('.einzt').is(':hidden') && width > 320) {
            var x = event.pageX - $('div.badgewrapper.einz').offset().left - 80;
            var y = event.pageY - $('div.badgewrapper.einz').offset().top + 10;
            $('.einzt').css('top', y);
            $('.einzt').css('left', x);
            $('.einzt').fadeIn();
        } else if($('.einzt').is(':hidden') && width <= 320) {
            var x2 = event.pageX - $('div.badgewrapper.einz').offset().left - 60;
            var y2 = event.pageY - $('div.badgewrapper.einz').offset().top + 10;
            $('.einzt').css('top', y2);
            $('.einzt').css('left', x2);
            $('.einzt').fadeIn();
        } else {
            $('.einzt').fadeOut();
        }
    });

    $('.tabusr').click(function(event){
        var tabtarget = $(event.target);
        var tabid = tabtarget.attr('data-tab');
        if(!tabtarget.hasClass('active')) {
            $('.tabusr').removeClass('active');
            tabtarget.addClass('active');
            $('.formcontentusr').hide();
            $('#'+tabid).show();
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

    $('.mobileusernav ul li a').click(function(event){
        var tabtarget = $(event.target);
        var tabid = tabtarget.attr('data-tab');
        if(!tabtarget.hasClass('mobileactive') || !tabtarget.parent().hasClass('mobileactive')) {
            if(!tabtarget.is('a')) {
                tabtarget = tabtarget.parent();
            }
            $(function(){
                if(tabtarget.attr('data-tab') == 'currentwish') {
                    $('.maintabs').hide();
                    $('.boxes').addClass('displayflex');
                } else {
                    $('.maintabs').show();
                    $('.boxes').removeClass('displayflex');
                    $('.mobileusernav ul li a').removeClass('mobileactive');
                    tabtarget.addClass('mobileactive');
                    $('.formcontentusr').hide();
                    $('#'+tabid).show();
                }
            });
        }
    });

    $('.openmenu').click(function(){
        $('.mobilenavwrapper').toggleClass('siderbar');
        $('.openmenu').toggleClass('siderbartoggler');
    });

    $(window).on('resize', function(){
        var width = $(window).width();
        if(width > 1036) {
            $('.boxes').removeClass('displayflex');
            $('.maintabs').show();
            $('.formcontentusr').hide();
            $('.formcontentusr.accountsettings').show();
        }
    });
});