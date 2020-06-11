<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'S_VHS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="font-size: 200%;" class="navbar-brand" href="{{ url('/') }}">


                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <div class="bg-img" style="position: relative; margin-top: -25px; ">
                          <img style="position: absolute; top: -10px; z-index: 9999; width: 6vw; height: auto;" src="img/s_vhs.png" alt="logo">
                      </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div style="font-size: 120%;">
                                <li style="margin-top: 9px; margin-right: 140px;">
                                    <a style="margin-right: 20px;" href="http://127.0.0.1:8000/home">@lang('home.home_menu')</a>
                                    <a style="margin-right: 20px;" href="http://127.0.0.1:8000/tapes">@lang('home.tape_menu')</a>
                                    <a style="margin-right: 20px;" href="http://127.0.0.1:8000/snippets">@lang('home.snippet_menu')</a>
                                    <a style="margin-right: 20px;" href="http://127.0.0.1:8000/about">@lang('home.about_menu')</a>
                                    <a style="margin-right: 20px;" href="http://127.0.0.1:8000/downloads">@lang('home.download_menu')</a>
                                    @if (Auth::user()->permissions == 1)
                                      <a style="margin-right: 20px;" href="http://127.0.0.1:8000/permissions">@lang('permissions.main')</a>
                                    @endif
                                </li>
                            </div>


                            <li class="nav-item">
                                <a class="nav-link" href="locale/en">en</a>
                            </li>
                            <li class="nav-link" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg/1200px-Flag_of_the_United_Kingdom_%283-2_aspect_ratio%29.svg.png" width="30" height="20" alt="en">

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="locale/es">es</a>
                            </li>
                            <li class="nav-link" href="#"><img src="https://cdn.webshopapp.com/shops/94414/files/54944160/spain-flag-icon-free-download.jpg" width="30" height="20" alt="es">

                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
