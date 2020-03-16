<!!DOCTYPE html>
<html lang="{{ app() -> getLocale() }}">
    <head>
        <meta charaset="utf-8">
        <meta http-quiv="X-UA-Compatible" conten="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <!--CSRF Token -->
        
        <meta name="csrf-token" content="{{  csrf_token()  }}">
        
        
        <title>@yield('title')</title>
        
        
        
        {{-- Laravel標準で用意されているJacascriptを読み込む --}}
        <script src="{{ secure_asset('js/app.js') }} "defer></script>
    
        <!--Fonts-->
        <link rel="dns-prefetch" href="http//fonts.gstatic.com">
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--Styles -->
        
        {{-- Lravel標準で用意されているCSSを読み込む　--}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        {{--　この章の後半で作成するCSSを読み込む --}}
        <link href="{{ secure_asset('css/a.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        {{ config('app.name','Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggl="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSuppotedContent" aria-expand="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav> 
            {{-- ここまでナビゲーションバー --}}
            
            <main class="py-4">
                {{--コンテンツをここに入れるため、@yieldで空けておく--}}
                @yield('content')
            </main>
        </div>
    </body>
</html>