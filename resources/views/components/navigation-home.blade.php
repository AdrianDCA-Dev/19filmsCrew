@props(['categories'])
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>MAS NOTICIAS:</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Sigue mi pagina de Facebook</a></li>
                                <li><a href="#">Bienvenido a la familia 19Films.</a></li>
                                <li><a href="#">Note rindas sigue tu ritmo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Buscar...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->

                       {{-- <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="#" class="nav-brand"><img src="{{asset('assets/assetsblog/img/core-img/logoo.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="/"
                                   class="@if (route('blog.index') === url()->current()) @endif"
                                   aria-current="page">Inicio</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('blog.category', $category) }}"
                                       aria-current="page">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                            <div class="ml-3 relative" x-data="{ open: false }">
                                <div>
                                    <button type="button"
                                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true" x-on:click="open=true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="{{asset('assets/usu.png')}}"
                                             alt="">
                                    </button>
                                </div>
                                <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                                     x-show="open" x-on:click.away="open=false">
                                    @auth
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                           tabindex="-1" id="user-menu-item-0">Panel Admin</a>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                           tabindex="-1" id="user-menu-item-0">Iniciar Sesion</a>
                                        <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                           tabindex="-1" id="user-menu-item-0">Registrarse</a>
                                    @endguest
                                </div>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

