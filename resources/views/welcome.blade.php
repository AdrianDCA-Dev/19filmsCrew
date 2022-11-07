<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/19films-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/19films-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/19films-touch-icon-114x114.png')}}">
    <title>19Films</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('assets/assets/assets/css/fontawesome.css')}}" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="{{asset('assets/welcome/plugin/components/Font Awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/welcome/plugin/whatsapp-chat-support.css')}}">

    <link rel="stylesheet" href="{{asset('assets/welcome/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/welcome/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/welcome/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/welcome/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.min.css')}}">
    @yield('css')


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/welcome/portafolio/vendor/bootstrap/css/bootstrap.min.css')}}">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/welcome/portafolio/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/welcome/portafolio/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('assets/welcome/css/glightbox/glightbox.css')}}">

    <link rel="stylesheet" href="{{asset('assets/welcome/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/welcome/css/stylevideo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/welcome/css/style.css')}}">

</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">

        <h1 id="colorlib-logo" class="mb-4 mb-md-5"><a href="index.html" style="background-image: url(assets/welcome/images/bg_1.jpg);">19films</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="{{ url('/') }}">INICIO</a></li>
                <li><a href="{{ url('blog') }}">BLOG</a></li>
                <li><a href="{{ url('quienes-somos') }}">QUIENES SOMOS</a></li>
                <li><a href="{{ url('quienes-somos') }}">CLIENTE</a></li>
                <li><a href="{{ url('portafolio') }}">PORTAFOLIO</a></li>
                <li><a href="{{ url('contactanos') }}">CONTACTO</a></li>
            </ul>
        </nav>
        <div class="colorlib-footer">

            <div class="mb-4">
                <h3>SUSCRÍBETE</h3>
                <form action="#" class="colorlib-subscribe-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                        <input type="text" class="form-control" placeholder="Introduzca la dirección de correo electrónico">
                    </div>
                </form>
                <div class="social-list social-list-bottom">
                    <a href="https://www.facebook.com/19filmsbolivia" class="icon ion-social-facebook"></a>
                    <a href="https://www.youtube.com/channel/UCl4DvocRICG9bP6OqFgQ_SQ" class="icon ion-social-youtube"></a>
                    <a href="https://www.instagram.com/19filmscrew/" class="icon ion-social-instagram"></a>
                    <a href="https://vimeo.com/cristianjuradodf" class="icon ion-social-vimeo"></a>
                </div>
            </div>
        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        @yield('content')

    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->
<div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button_label">
        Contáctanos
    </div>
    <div class="wcs_button wcs_button_circle">
        <span class="fa fa-whatsapp"></span>
    </div>

    <div class="wcs_popup">
        <div class="wcs_popup_close">
            <span class="fa fa-close"></span>
        </div>
        <div class="wcs_popup_header">
            <span class="fa fa-whatsapp"></span>
            <strong>Servicio al cliente</strong>

            <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

        </div>
        <div class="wcs_popup_input"
             data-number="+59171898453"
             data-availability='{ "monday":"07:00-23:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
            <input type="text" placeholder="Escribir pregunta!" />
            <i class="fa fa-play"></i>
        </div>
        <div class="wcs_popup_avatar">
            <img src="{{asset('assets/19films-touch-icon-114x114.png')}}" alt="">
        </div>
    </div>
</div>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



<script src="{{asset('assets/js/jquery.min.js')}}"></script>
{{--<script src="{{asset('assets/welcome/js/jquery.min.js')}}"></script>--}}
<script src="{{asset('assets/welcome/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/popper.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/welcome/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/owl.carousel.min.js')}}"></script>
@yield('script')
<script src="{{asset('assets/welcome/glightbox/js/glightbox.js')}}"></script>

<script>

</script>
<script src="{{asset('assets/welcome/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/scrollax.min.js')}}"></script>
<script src="{{asset('assets/welcome/js/google-map.js')}}"></script>
<script src="{{asset('assets/welcome/js/main.js')}}"></script>

<script src="{{asset('assets/welcome/plugin/components/jQuery/jquery-1.11.3.min.js')}}"></script>
<!-- Plugin JS file -->
<script src="{{asset('assets/welcome/plugin/components/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/welcome/plugin/components/moment/moment-timezone-with-data.min.js')}}"></script> <!-- spanish language (es) -->
<script src="{{asset('assets/welcome/plugin/whatsapp-chat-support.js')}}"></script>
<script>
    $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
</script>

<script src="{{asset('assets/welcome/portafolio/js/main.js')}}"></script>


</body>


</html>
