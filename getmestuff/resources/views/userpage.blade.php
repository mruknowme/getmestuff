<!doctype html>
<html class="overflow-visible user-bg userpage" lang="{{ app()->getLocale() }}">
    @include ('layouts.base')
    <body class="overflow-visible">
        <div id="app">
            @include ('layouts.header')
            <main class="col-12 mw mh m-auto main-fix">
                @include ('layouts.user.info')
                <div class="mw mh flex s-between">
                    <div class="main-content">
                        <tabs>
                            <tab name="<i class='fa fa-cog' aria-hidden='true'></i><span>Settings</span>" :selected="true">
                                @include ('layouts.user.settings')
                            </tab>
                            <tab name="<i class='fa fa-money' aria-hidden='true'></i><span>Wallet</span>">
                                <wallet></wallet>
                            </tab>
                            <tab name="<i class='fa fa-star' aria-hidden='true'></i><span>Achievements</span>">
                                @include ('layouts.user.achievements')
                            </tab>
                            <tab name="<i class='fa fa-pencil' aria-hidden='true'></i><span>Make a Wish</span>">
                                @include ('layouts.user.make')
                            </tab>
                        </tabs>
                        {{-- <ul class="tabs">
                            <li class="active" data-tab="settings">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Settings</span>
                            </li>
                            <li data-tab="money">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Wallet</span>
                            </li>
                            <li data-tab="achievtab">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>Achievements</span>
                            </li>
                            <li data-tab="wish">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <span>Make a Wish</span>
                            </li>
                        </ul>
                        <div>
                            @include ('layouts.user.settings')
                            @include ('layouts.user.wallet')
                            @include ('layouts.user.achievements')
                            @include ('layouts.user.make')
                        </div> --}}
                    </div>
                    <div class="wishes flex vertical between w4">
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
            @include ('layouts.footer')
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
