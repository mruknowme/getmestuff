<!doctype html>
<html class="login overflow-visible" lang="{{ app()->getLocale() }}">
    @include ('layouts.base')
    <body class="overflow-visible">
        <div id="app">
            @include ('layouts.header')
            <main class="mh mw">
                <section class="pos-r flex vertical center">
                    <tabs>
                        <tab name="Sign Up" :selected="true">
                            @include ('auth.layouts.register')
                        </tab>
                        <tab name="Log In">
                            @include ('auth.layouts.login')
                        </tab>
                    </tabs>
                </section>
            </main>
            @include ('layouts.footer')
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
