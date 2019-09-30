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
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="app">
    <div class="uk-section-primary uk-preserve-color">

        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-dark; top:700">

        <div class="navmain">
        <nav class="uk-navbar-container uk-navbar-transparent">
            <div class="uk-container">
                <div class="uk-navbar" uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-padding-small" href="/"><img src="{{asset('images/logosmall.png')}}" width="90px"  alt=""></a>
                    </div>
                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav navbar">
                            <div>
                                <a class="uk-navbar-toggle uk-visible@m" uk-search-icon href="#"></a>
                                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                    </form>
                                </div>

                            </div>
                            <a href="" class="uk-navbar-toggle uk-visible@m" uk-icon="icon: mail"></a>
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
                                                <a href="welcome">Home</a>
                                            </li>

                                            <li>
                                                <a href="service">Services</a>
                                            </li>


                                            <li>
                                                <a href="gallery">Gallery</a>
                                            </li>



                                            <li>
                                                <a href="about">About</a>
                                            </li>

                                            <li>
                                                <a href="contact">Contact</a>
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
                                    </div>

                                </div>

                        </ul>
                                    </div>


                    </div>
                </div>

        </nav>
    </div>
        </div>
    </div>



    <main>
        @yield('content')
    </main>






   <footer>

       <div class="uk-container-fluid footer">
           <div class="uk-section">

<div class="uk-container" id="footer">
           <div class="uk-grid">
               <div class="uk-width-2-5">
                   <h5>About Company</h5>
                   <p>
                       <span class="uk-icon" uk-icon="icon:home;ratio:1" style="color:grey;"></span> iFart Technology
                   </p>
                   <p>
                       <span class="uk-icon" uk-icon="icon:location;ratio:1" style="color:grey;"></span> Sorhakhutte, Kathmandu (Nepal)
                   </p>
                   <p>
                      <span class="uk-icon" uk-icon="icon:clock;ratio:1" style="color:grey;"></span> 11am to 5pm (GMT-5:45)
                   </p>
                   <p>
                       <span class="uk-icon" uk-icon="icon:receiver;ratio:1" style="color:grey;"></span> +977-9843792613
                   </p>

               </div>
               <div class="uk-width-1-5">
                   <h5>Menu</h5>
                   <ul class="uk-list">



                       <li>
                           <a href="{{ route('login') }}">Home</a>
                       </li>
                       <li>
                           <a href="{{ route('login') }}">Services</a>
                       </li>

                       <li>
                           <a href="{{ route('login') }}">Templates</a>
                       </li>

                       <li>
                           <a href="{{ route('login') }}">Contact</a>
                       </li>

                       <li>
                           <a href="{{ route('login') }}">For Students</a>
                       </li>


                   </ul>
               </div>
               <div class="uk-width-2-5">
                    <h5>Blog News</h5>
                   <ul class="uk-list">
                       <li> <p><span class="uk-icon" uk-icon="icon:file-edit;ratio:1.5" style="color:grey;"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                       <li> <p><span class="uk-icon" uk-icon="icon:file-edit;ratio:1.5" style="color:grey;"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                       <li> <p><span class="uk-icon" uk-icon="icon:file-edit;ratio:1.5" style="color:grey;"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>

                       <li> <p><span class="uk-icon" uk-icon="icon:file-edit;ratio:1.5" style="color:grey;"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>

                   </ul>
               </div>

           </div>

{{--    <h1 class="uk-heading-line uk-margin-large-bottom uk-text-center"> copyright:ifarttechnology@2019</h1>--}}
    <h1 class="uk-heading-line uk-text-center " style="font-size:16px;color:white;"><span>


        Copyright 2019, iFart Technology. All Rights Reserved.</span></h1>

</div>
       </div>
       </div>
   </footer>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/wow.min.js') }}" ></script>

<script>
    new WOW().init();
</script>

</body>
</html>
