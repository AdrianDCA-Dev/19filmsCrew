<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:url"           content="@yield('url')" />
    <meta property="og:type"          content="@yield('type')" />
    <meta property="og:title"         content="@yield('ogtitle')" />
    <meta property="og:description"   content="@yield('description')" />
    <meta property="og:image"         content="@yield('image')" />

    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/19films-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/19films-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/19films-touch-icon-114x114.png')}}">
    <title>19Films</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/assetsblog/style.css')}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>

<body>
<!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div>
        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets/assetsblog/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/assetsblog/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/assetsblog/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets/assetsblog/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/assetsblog/js/active.js')}}"></script>

    @vite(['resources/js/app.js'])
    @livewireScripts
    @stack('scripts')
</body>

</html>
