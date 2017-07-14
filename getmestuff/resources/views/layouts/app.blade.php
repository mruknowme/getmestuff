<!doctype html>
<html class="@yield('html-class')" lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::user(),
                'locale' => app()->getLocale(),
                'signedIn' => Auth::check()
            ]) !!}
        </script>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="locale" content="{{ app()->getLocale() }}">

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        
        <title>{{ config('app.name') }} @yield('title')</title>
    </head>
    
    <body class="@yield ('body-class')">
        <script>
            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                if (window.App.locale == 'ru') {
                    js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9";
                } else {
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
                }
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div id="app">
            @include ("layouts.$lang.header")
            
            @yield ('content')

            @include ("layouts.$lang.footer")

            <flash :message="{{ json_encode([session('message')]) }}"></flash>

            @if (count($errors) > 0)
                <errors :errors="{{ json_encode($errors->all()) }}"></errors>
            @endif
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script>
            Vue.i18n.set('{!! app()->getLocale() !!}');
        </script>
        
        @yield ('script')
   
    </body>
</html>
