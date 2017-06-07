@extends ('layouts.app')

@section ('title', ' | Userpage')

@section ('html-class', 'overflow-visible user-bg userpage')

@section ('body-class', 'overflow-visible')

@section ('content')
    <main class="col-12 mw mh m-auto main-fix">
        <user-info user="{{ auth()->user() }}"></user-info>

        <div class="mw mh flex s-between main-wrapper">

            <div class="main-content children">
                <tabs>
                    <tab name="<i class='fa fa-cog' aria-hidden='true'></i><span>Settings</span>" :selected="true">
                        @include ('layouts.user.settings')
                    </tab>
                    <tab name="<i class='fa fa-money' aria-hidden='true'></i><span>Wallet</span>">
                        <wallet user="{{ auth()->user()->email }}"></wallet>
                    </tab>
                    <tab name="<i class='fa fa-star' aria-hidden='true'></i><span>Achievements</span>">
                        @include ('layouts.user.achievements')
                    </tab>
                    <tab name="<i class='fa fa-pencil' aria-hidden='true'></i><span>Make a Wish</span>">
                        @include ('layouts.user.make')
                    </tab>
                </tabs>
            </div>

            <div class="wishes flex vertical between w4 children">

                <div class="wish mw">
                    <h3>Your Current Wish</h3>
                    <div class="content">
                        <div class="header">
                            <h4>iPhone 6</h4>
                            <p>23/12/16</p>
                        </div>
                        <div class="progress">
                            <p>Progress</p>
                            <div class="progress-bar">
                                <div></div>
                            </div>
                        </div>
                        <div class="footer">
                            <p>Collected: 40 000/70 000</p>
                        </div>
                    </div>
                </div>

                <div class="wish mw">
                    <h3>Random Wish</h3>
                    <div class="content">
                        <div class="header">
                            <h4>iPhone 6</h4>
                            <p>23/12/16</p>
                        </div>
                        <div class="progress">
                            <p>Progress</p>
                            <div class="progress-bar">
                                <div></div>
                            </div>
                        </div>
                        <div class="footer">
                            <p>Collected: 40 000/70 000</p>
                            <form>
                                <input type="number" name="amount" required>
                                <button type="submit">Donate</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection

@section ('script')
    <script type="text/javascript">
        $(function() {
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