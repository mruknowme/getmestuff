<!doctype html>
<html class="@yield('html-class')" lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        
        <title>{{ config('app.name') }} @yield('title')</title>
    </head>
    
    <body class="@yield ('body-class')">

        <div id="app">
            @include ('layouts.header')
            
            @yield ('content')

            @include ('layouts.footer')

            <flash message="{{ session('message') }}"></flash>

            @if (count($errors) > 0)
                <div class="alert error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        
        @yield ('script')
   
    </body>
</html>
