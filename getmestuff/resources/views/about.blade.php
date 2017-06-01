<!doctype html>
<html class="about" lang="{{ app()->getLocale() }}">
    @include ('layouts.base')
    <body class="overflow-scroll">
        @include ('layouts.header')
        <main class="mh mw pos-r">
            <div class="slides">
                <section data-0="top: 0%" class="mw mh pos-a" style="z-index: 10">
                    <div class="mw pos-r m-auto fixed-fix inner">
                        <div class="flex around header pos-r">
                            <h2>Begining</h2>
                        </div>
                        <div data-900="opacity: 1;" data-1200="opacity: 0;" class="text pos-a" data-1700="opacity: 1;" data-2000="opacity: 0;">
                            <div class="pos-a left w45">
                                <h3>Lorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quisquam adipisci sunt fugit consequuntur assumenda repellendus quos minus porro voluptatum.</p>
                            </div>
                            <img class="main-image pos-center pos-a" src="{{ asset('images/ex.png') }}">
                            <div class="pos-a right w45">
                                <h3>Lorem ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi amet ipsam vero ratione vel, enim excepturi molestiae deserunt dolorem illo consectetur distinctio error! Minima, animi.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section data-1000="top: 100%" data-1200="top: 0%" class="mw mh pos-a" style="z-index: 20">
                    <div class="mw pos-r m-auto fixed-fix inner">
                        <div data-1100="top: -200px;" data-1200="top: 10px;" class="flex around header pos-r">
                            <h2>Begining</h2>
                        </div>
                        <div class="text pos-a" data-1000="top: -100px;" data-1200="top: 190px;" data-1900="opacity: 1;" data-2200="opacity: 0;">
                            <div data-1300="opacity: 0;" data-1500="opacity: 1;" class="pos-a left w45">
                                <h3>Lorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quisquam adipisci sunt fugit consequuntur assumenda repellendus quos minus porro voluptatum.</p>
                            </div>
                            <img class="main-image pos-center pos-a" src="{{ asset('images/ex.png') }}">
                            <div data-1500="opacity: 0;" data-1700="opacity: 1;" class="pos-a right w45">
                                <h3>Lorem ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi amet ipsam vero ratione vel, enim excepturi molestiae deserunt dolorem illo consectetur distinctio error! Minima, animi.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section data-2000="top: 100%" data-2200="top: 0%" class="mw mh pos-a" style="z-index: 30">
                    <div class="mw pos-r m-auto fixed-fix inner">
                        <div data-2100="top: -200px;" data-2200="top: 10px;" class="flex around header pos-r">
                            <h2>Begining</h2>
                        </div>
                        <div class="text pos-a" data-2000="top: -100px;" data-2200="top: 190px;" data-2700="opacity: 1;" data-3200="opacity: 0;">
                            <div data-2300="opacity: 0;" data-2500="opacity: 1;" class="pos-a left w45">
                                <h3>Lorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quisquam adipisci sunt fugit consequuntur assumenda repellendus quos minus porro voluptatum.</p>
                            </div>
                            <img class="main-image pos-center pos-a" src="{{ asset('images/ex.png') }}">
                            <div data-2500="opacity: 0;" data-2700="opacity: 1;" class="pos-a right w45">
                                <h3>Lorem ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi amet ipsam vero ratione vel, enim excepturi molestiae deserunt dolorem illo consectetur distinctio error! Minima, animi.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        @include ('layouts.footer')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/skrollr.js') }}"></script>
        <script type="text/javascript">
            var s = skrollr.init();
        </script>
    </body>
</html>
