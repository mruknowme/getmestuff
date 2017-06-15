@extends ('layouts.app')

@section ('title', ' | '.auth()->user()->first_name.' '.auth()->user()->last_name)

@section ('html-class', 'overflow-visible user-bg userpage')

@section ('body-class', 'overflow-visible')

@section ('content')
    <user-page inline-template>
        <main class="col-12 mw mh m-auto main-fix">
            <user-info :user="{{ auth()->user() }}"></user-info>

            <div class="mw mh flex s-between main-wrapper">
                <div class="main-content children">
                    <tabs>
                        <tab name="<i class='fa fa-lg fa-cog' aria-hidden='true'></i>" title="Settings" :selected="true">
                            <settings :user="{{ auth()->user() }}"></settings>
                        </tab>
                        <tab name="<i class='fa fa-lg fa-money' aria-hidden='true'></i>" title="Wallet">
                            <wallet user="{{ auth()->user()->email }}"></wallet>
                        </tab>
                        <tab name="<i class='fa fa-lg fa-trophy' aria-hidden='true'></i>" title="Achievements">
                            @include ('layouts.user.achievements')
                        </tab>
                        <tab name="<i class='fa fa-lg fa-pencil' aria-hidden='true'></i>" title="Make a Wish">
                            <make :user="{{ auth()->user() }}"></make>
                        </tab>
                        <tab name="<i class='fa fa-lg fa-globe' aria-hidden='true'></i>" title="Social">
                            @include ('layouts.user.social')
                        </tab>
                    </tabs>
                </div>

                <div class="wishes vertical flex between w4 children">
                    <userwishes :wishes="{{ auth()->user()->wishes()->where('completed', 0)->get() }}"></userwishes>
                    <wishrandom :wishes="{{ $random }}"></wishrandom>
                </div>
            </div>
        </main>
    </user-page>
@endsection

@section ('script')
    <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>
{{--    <script src="{{ asset('js/sektor.js') }}"></script>--}}
    <script type="text/javascript">
        $(function() {
            $('.user-wishes').owlCarousel({
                items: 1,
                dots: false,
                nav: true,
                navText: [
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
            });

            $(window).on('resize', function() {
                var win = $(this);
                if (win.width() <= 770) {
                    $('.main-wrapper').addClass('owl-carousel owl-theme');
                    $('.main-wrapper .children').addClass('item');
                    $('.main-wrapper').owlCarousel({
                        items: 1
                    });
                } else {
                    $('.main-wrapper').removeClass('owl-carousel owl-theme');
                    $('.main-wrapper .children').removeClass('item');
                    $('.main-wrapper').trigger('destroy.owl.carousel');
                }
            });

            var width = $(window).width();
            if (width <= 770) {
                $('.main-wrapper').addClass('owl-carousel owl-theme');
                $('.main-wrapper .children').addClass('item');
                $('.main-wrapper').owlCarousel({
                    items: 1
                });
            }
        });
    </script>
@endsection