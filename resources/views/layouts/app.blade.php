<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="app">
    <div class="navmain">
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div class="uk-navbar" uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-padding-small" href="/"><img src="{{asset('images/logosmall.png')}}" width="90px"  alt=""></a>
                    </div>
                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav">
                            <div>
                                <a class="uk-navbar-toggle uk-visible@m" uk-search-icon href="#"></a>
                                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                    </form>
                                </div>
                            </div>
                                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #menu">
                                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                                </a>

                                {{--    menu offcanvas --}}


                                <div id="menu" uk-offcanvas="mode:slide; overlay: true;flip:true;">
                                    <div class="uk-offcanvas-bar">

                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                        <!-- Authentication Links -->
                                        @guest

                                        <h3>Menu</h3>


                                            <div class="uk-navbar-item uk-hidden@m">
                                                <form class="uk-search uk-search-navbar">
                                                    <span uk-search-icon></span>
                                                    <input class="uk-search-input" type="search" placeholder="Search...">
                                                </form>
                                            </div>
                                            <li>
                                                <a href="{{ route('login') }}">Home</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('login') }}">Services</a>
                                            </li>


                                            <li>
                                                <a href="{{ route('login') }}">Gallery</a>
                                            </li>



                                            <li>
                                                <a href="{{ route('login') }}">About</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('login') }}">Contact</a>
                                            </li>


                                            <li>
                                                <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="#">
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <div class="uk-navbar-dropdown">
                                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                                  style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </li>

                                        @endguest

                        </ul>
                                    </div>


                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>






    <footer class="uk-section uk-section-xsmall uk-section-secondary">
        <div class="uk-container">
            <div class="uk-grid uk-text-center uk-text-left@s uk-flex-middle" data-uk-grid>
                <div class="uk-text-small uk-text-muted uk-width-1-3@s">
                    Lovingly cobbled together by
                    <a target="_blank" href="https://torrix.uk/">Matt Fletcher at Torrix</a>
                </div>
                <div class="uk-text-center uk-width-1-3@s">
                    <a target="_blank" href="https://twitter.com/mattfletcher"
                       class="uk-icon-button uk-margin-small-right" data-uk-icon="twitter"></a>
                    <a target="_blank" href="https://github.com/Torrix"
                       class="uk-icon-button" data-uk-icon="github"></a>
                </div>
                <div class="uk-text-small uk-text-muted uk-text-center uk-text-right@s uk-width-1-3@s">
                    Built with <a target="_blank" href="http://getuikit.com"><span data-uk-icon="uikit"></span></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
