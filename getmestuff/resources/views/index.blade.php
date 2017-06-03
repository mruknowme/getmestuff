@extends ('layouts.app')

@section ('body-class', 'index')

@section ('content')
    <main class="main" id="pp">
        <section class="section main pos-a" style="z-index: 5">
            <div class="main main-section">
                <div class="flex center vertical pos-a pos-center w8 text-wrapper">
                    <h1>GetMeStuff</h1>
                    <div class="owl-theme owl-carousel">
                        <div class="item">
                            <p class="mw t-align">Here at GetMeStuff, you can join a community of people, who give each other monetary help, so they can pursue their dreams.</p>
                        </div>
                        <div class="item t-align">
                            <p class="mw">Something else</p>
                        </div>
                        <div class="item t-align">
                            <p class="mw">Something else 2</p>
                        </div>
                    </div>
                    <a class="btn" href="/register">Sign Up</a>
                </div>
            </div>
        </section>
        <section class="section main">
            <div class="col-12 mw mh flex between m-auto s-section">
                <img src="http://placehold.it/350x350">
                <div class="flex vertical start w5">
                    <h2>How it works?</h2>
                    <p>The idea behind this site is very simple. Think about what you really want (iPhone, holidays) and ask people to help raise the funds. Although, to do this, you need to help first.</p>
                    <a href="/about" class="btn">More...</a>
                </div>
            </div>
        </section>
        <section class="section main">
            <div class="col-12 mw mh flex between m-auto s-section">
                <div class="flex vertical start w5">
                    <h2>Who are we?</h2>
                    <p>Just to firends who understood, that in the hour of need, it can be embarassing to ask others for help. Therefore, we came up with the idea of asking anonymously not only your firends, but the whole world.</p>
                    <a href="/about" class="btn">More...</a>
                </div>
                <img src="http://placehold.it/350x350">
            </div>
        </section>
        <section class="section main">
            <div class="col-12 mw mh m-auto s-section center pos-r stories">
                <div class="pos-a pos-center flex vertical center mw">
                    <h2>Success stories</h2>
                    <div class="flex between mw stories-wrapper">
                        <div class="t-align">
                            <h4>Farid Muradly</h4>
                            <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                            <p>Raised: 100 000</p>
                        </div>
                        <div class="t-align">
                            <h4>Farid Muradly</h4>
                            <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                            <p>Raised: 100 000</p>
                        </div>
                        <div class="t-align">
                            <h4>Farid Muradly</h4>
                            <p>I would like to say thanks, to this project and everyone using it. I managed to finally visit USA!</p>
                            <p>Raised: 100 000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section main">
            <div class="col-12 mw mh flex vertical center m-auto s-section">
                <h2 class="self-start">Contact Us</h2>
                <div class="mw flex s-between contact-form">
                    <p class="w4">We would like to here from you about any suggestions or problems.</p>
                    <form class="vertical center w5" data-parsley-validate>
                        {{ csrf_field() }}
                        <div class="mw input-wrapper pos-r">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="mw input-wrapper pos-r">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="mw input-wrapper pos-r">
                            <textarea name="message" placeholder="Your Message..." required></textarea>
                        </div>
                        <button class="self-start" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
 @endsection

@section ('script')
    <script type="text/javascript">
        $(function() {
            $('#pp').pagepiling({
                 navigation: {
                    'textColor': '#FFF',
                    'bulletsColor': '#FFF',
                    'position': 'right',
                    'tooltips': ['Welcome', 'How it Works', 'Who are We', 'Success Stories', 'Contact Us']
                },
            });

            $('.owl-carousel').owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autoplayHoverPause: true,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                dots: false
            });

            function initOwl() {
                $('.stories-wrapper').addClass('owl-carousel owl-theme');
                $('.stories-wrapper .t-align').addClass('item');
                $('.stories-wrapper').owlCarousel({
                    loop: true,
                    items: 1,
                    autoplay: true,
                    autoplayHoverPause: true,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false
                });
            }

            var width = $(window).width();
            if (width <= 770) {
                initOwl();
            }

            $(window).on('resize', function() {
                var win = $(this);
                if (win.width() <= 770) {
                    initOwl();
                } else {
                    $('.stories-wrapper').removeClass('owl-carousel owl-theme');
                    $('.stories-wrapper .t-align').removeClass('item');
                    $('.stories-wrapper').trigger('destroy.owl.carousel');
                }
            });
        });
    </script>
@endsection