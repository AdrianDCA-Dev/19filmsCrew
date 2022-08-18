<!DOCTYPE HTML>
<html lang="en">

<!-- robert/  03:29:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/19films-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/19films-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/19films-touch-icon-114x114.png')}}">
    <title>19Films</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap" rel="stylesheet">

    <!-- inicio con video -->
    <link rel="stylesheet" href="{{asset('assets/assetsinicio/style.css')}}">


    <!-- // somos-->

    <link href="{{asset('assets/assetssomos/assets/lightbox/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assetssomos/css/style.css')}}" rel="stylesheet">



    <!--//video-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{asset('assets/assets/assets/css/fontawesome.css')}}" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="{{asset('assets/assetsvideo/css/style.css')}}" type="text/css">
    <!--//-->
    <link href="{{asset('assets/assets/assets/css/style.css')}}" rel="stylesheet" media="screen">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
</head>
<body>
<div class="animsition">
    <div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>

    <div class="click-capture"></div>

    <div class="menu">
        <span class="close-menu icon-cross2 right-boxed"></span>
        <ul class="menu-list right-boxed">
            <li data-menuanchor="page1">
                <a href="#page1">INICIO</a>
            </li>
            <li data-menuanchor="page2">
                <a href="{{ url('blog') }}">BLOG</a>
            </li>
            <li data-menuanchor="page2">
                <a href="#page2">QUIENES SOMOS</a>
            </li>
            <li data-menuanchor="page3">
                <a href="#page3">RESUMEN</a>
            </li>
            <li data-menuanchor="page4">
                <a href="#page4">CLIENTES</a>
            </li>
            <li data-menuanchor="page5">
                <a href="#page5">PORTAFOLIO</a>
            </li>
            <!-- <li data-menuanchor="page6">
              <a href="#page6">EQUIPO</a>
             </li>-->
            <li data-menuanchor="page7">
                <a href="#page7">CONTACTO</a>
            </li>
        </ul>
        <div class="menu-footer right-boxed">
            <div class="social-list">
                <a href="https://www.facebook.com/19filmsbolivia" class="icon ion-social-facebook"></a>
                <a href="https://www.youtube.com/channel/UCl4DvocRICG9bP6OqFgQ_SQ" class="icon ion-social-youtube"></a>
                <a href="https://www.instagram.com/19filmscrew/" class="icon ion-social-instagram"></a>
                <a href="https://vimeo.com/cristianjuradodf" class="icon ion-social-vimeo"></a>
            </div>
        </div>
    </div>

    <header class="navbar boxed">
        <div class="navbar-bg"></div>
        <a class="brand" href="{{ url('blog') }}">
            <img class="brand-img" alt="" src="{{asset('assets/images/logo.png')}}">
            <div class="brand-info">
             <div class="brand-name">BLOG</div>
             {{--<div class="brand-text">19films</div>--}}
            </div>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="contacts d-none d-md-block">
        {{-- <div class="contact-item">
             Visita nuestro BLOG
         </div>--}}
         {{--<div class="contact-item spacer">
          / Contactanos
         </div>--}}
        </div>
    </header>

    <div class="social-list social-list-bottom boxed">
        <a href="https://www.facebook.com/19filmsbolivia" class="icon ion-social-facebook"></a>
        <a href="https://www.youtube.com/channel/UCl4DvocRICG9bP6OqFgQ_SQ" class="icon ion-social-youtube"></a>
        <a href="https://www.instagram.com/19filmscrew/" class="icon ion-social-instagram"></a>
        <a href="https://vimeo.com/cristianjuradodf" class="icon ion-social-vimeo"></a>
    </div>
    <!--<div class="sis">
     <ul class="mio">
      <li><a href="#"><i class="fa-brands fa fa-instagram instagram"></i></a></li>
      <li><a href="#"><i class="fa-brands fa fa-whatsapp whatsapp"></i></a></li>
      <li><a href="#"><i class="fa-brands fa fa-twitter twitter"></i></a></li>
     </ul>
    </div>-->



    <div class="pagepiling">
        <div data-anchor="page1" class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url({{asset('assets/images/bg/inicio.jpg')}});"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-6">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="col-md-6 intros text-end">
                                                    <div class="video-box">
                                                        <a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="glightbox position-absolute top-50 start-50 translate-middle">
                                                             <span>
                                                               <i class="fas fa-play-circle"></i>
                                                             </span>
                                                            <span class="border-animation border-animation border-1"></span>
                                                            <span class="border-animation border-animation border-2"></span>
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--

                <div data-anchor="page1" class="pp-scrollable text-white section section-1">
                    <div class="scroll-wrap">
                        <!--<div class="section-bg" style="background-image:url(images/bg/textura.png);"></div>-->
                        <div class="section-bg hero--area">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-8 col-lg-9">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                                            <div class="intro">

                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(images/bg/main.png);">
                                                            <a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="post-2" role="tabpanel" aria-labelledby="post-2-tab">
                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/8.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=7iAiCpD0o34&t=1s" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="post-3" role="tabpanel" aria-labelledby="post-3-tab">

                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/9.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="post-4" role="tabpanel" aria-labelledby="post-4-tab">

                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/10.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=4TszsPROJws&t=5s" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="post-5" role="tabpanel" aria-labelledby="post-5-tab">

                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/7.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=zXhu1uIy1Po" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="post-6" role="tabpanel" aria-labelledby="post-6-tab">

                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/10.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="post-7" role="tabpanel" aria-labelledby="post-7-tab">

                                            <div class="intro">
                                                <div class="intros text-end">
                                                    <div class="video-box">
                                                        <!-- Single Feature Post -->
                                                        <div class="single-feature-post video-post bg-img" style="background-image: url(assetsinicio/img/bg-img/7.jpg);">
                                                            <!-- Play Button -->
                                                            <a href="https://www.youtube.com/watch?v=qf2z2vpVrnQ" class="glightbox position-absolute top-50 start-50 translate-middle">
                       <span>
                         <i class="fas fa-play-circle"></i>
                       </span>
                                                                <span class="border-animation border-animation--border-1"></span>
                                                                <span class="border-animation border-animation--border-2"></span>
                                                            </a>
                                                            <span class="video-duration">05.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <ul class="nav vizew-nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab" aria-controls="post-1" aria-selected="true">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/3.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">Teaser Alquimia</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 25</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-2-tab" data-toggle="pill" href="#post-2" role="tab" aria-controls="post-2" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/4.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">Burbushhh SPOT 2021 4K</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 14</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-3-tab" data-toggle="pill" href="#post-3" role="tab" aria-controls="post-3" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/5.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">ALQUIMIA by Luis Yeske 2022</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 14</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-4-tab" data-toggle="pill" href="#post-4" role="tab" aria-controls="post-4" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/6.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">LOS MUSIKEROS DE TARIJA - LA TOXICA</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 24</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-5-tab" data-toggle="pill" href="#post-5" role="tab" aria-controls="post-5" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/4.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">Teaser ARMY 4K</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 14</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-6-tab" data-toggle="pill" href="#post-6" role="tab" aria-controls="post-6" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/6.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">Mega Fashion Night 2021</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 24</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="post-7-tab" data-toggle="pill" href="#post-7" role="tab" aria-controls="post-7" aria-selected="false">
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post style-2 d-flex align-items-center">
                                                    <div class="post-thumbnail">
                                                        <img src="assetsinicio/img/bg-img/4.jpg" alt="">
                                                    </div>
                                                    <div class="post-content">
                                                        <h6 class="post-title">LOS MUSIKEROS DE TARIJA - LA TOXICA</h6>
                                                        <div class="post-meta d-flex justify-content-between">
                                                            <span><i class="fa fa-comments" aria-hidden="true"></i> 24</span>
                                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="scrollable-content">
                            <div class="vertical-centred">
                                <div class="boxed boxed-inner">
                                    <div class="vertical-title d-none d-lg-block"><span>Bienvenido</span></div>
                                    <!-- <div class="boxed">

                                      <div class="container">
                                       <div class="intro">
                                        <div class="row">
                                         <div class="col-md-8 col-lg-6">
                                          <p class="subtitle-top">Bienvenido<br>Cinema Studio</p>
                                          <h1 class="display-2 text-white"><span class="text-primary">Hola</span> Somos<br> 19Films</h1>
                                          &lt;!&ndash;<a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="popup-youtube icon ion-ios-play"></a>&ndash;&gt;
                                          <br>
                                          <br>
                                          <br>
                                          <br>
                                          <div class="col-md-6 intros text-end">
                                           <div class="video-box">

                                            <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                                           <span>
                                             <i class="fas fa-play-circle"></i>
                                           </span>
                                             <span class="border-animation border-animation&#45;&#45;border-1"></span>
                                             <span class="border-animation border-animation&#45;&#45;border-2"></span>
                                            </a>
                                           </div>
                                          </div>


                                         </div>
                                        </div>
                                       </div>
                                      </div>
                                     </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        --}}


        <div data-anchor="page2" class="pp-scrollable section section-2">
            <div class="scroll-wrap">
                <div class="section-bg" >
                    <div class="gallery-container">
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-01-large.jpg')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-01-thumbnail.jpg')}}" alt="" class="grayscale gallery__img"></a>
                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-02-large.png')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-02-thumbnail.png')}}" alt="" class="grayscale gallery__img"></a>
                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-03-large.png')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-03-thumbnail.png')}}" alt="" class="grayscale gallery__img"></a>

                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-04-large.jpg')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-04-thumbnail.jpg')}}" alt="" class="grayscale gallery__img"></a>

                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-05-large.jpg')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-05-thumbnail.jpg')}}" alt="" class="grayscale gallery__img"></a>
                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-06-large.png')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-06-thumbnail.png')}}" alt="" class="grayscale gallery__img"></a>

                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-07-large.png')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUUm"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-07-thumbnail.png')}}" alt="" class="grayscale gallery__img"></a>
                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-08-large.jpg')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-08-thumbnail.jpg')}}" alt="" class="grayscale gallery__img"></a>
                        </div>
                        <div class="img gallery__item">
                            <a href="{{asset('assets/assetssomos/img/portfolio/portfolio-09-large.png')}}" data-lightbox="roadtrip" title="DESCRIPCION DE LA FOTO GORDITUU"><img src="{{asset('assets/assetssomos/img/portfolio/portfolio-09-thumbnail.png')}}" alt="" class="grayscale gallery__img"></a>

                        </div>
                    </div>

                    <!--   <div class="container">
                           <div class="row row-offset-0">

                               &lt;!&ndash; PORTFOLIO ITEM 1 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-01-large.jpg" data-lightbox="roadtrip" title="Project One - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-01-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 2 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-02-large.jpg" data-lightbox="roadtrip" title="Project Two - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-02-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 3 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-03-large.jpg" data-lightbox="roadtrip" title="Project Three - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-03-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 4 &ndash;&gt;
                               <div class="col-md-3 col-sm-6 ">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-04-large.jpg" data-lightbox="roadtrip" title="Project Four - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-04-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 5 &ndash;&gt;
                               <div class="col-md-3 col-sm-6 ">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-05-large.jpg" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 6 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-06-large.jpg" data-lightbox="roadtrip" title="Project Six - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-06-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 7 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-07-large.jpg" data-lightbox="roadtrip" title="Project Seven - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-07-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;

                               &lt;!&ndash; PORTFOLIO ITEM 8 &ndash;&gt;
                               <div class="col-md-3 col-sm-6">
                                   <div class="overlay-effect effects clearfix">
                                       <div class="img">
                                           <a href="assetssomos/img/portfolio/portfolio-08-large.jpg" data-lightbox="roadtrip" title="Project Eight - Lorem Ipsum"><img class="grayscale" src="assetssomos/img/portfolio/portfolio-08-thumbnail.jpg" alt="Portfolio Item"></a>
                                       </div>
                                   </div>
                               </div>
                               &lt;!&ndash; PORTFOLIO ITEM END &ndash;&gt;
                           </div>&lt;!&ndash;/row&ndash;&gt;
                       </div>/.container-->

                </div>

                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-white  d-none d-lg-block"><span>QUIENES SOMOS</span></div>
                            <div class="boxed">

                                <div class="box1 container">
                                    <div class="intro">
                                        <div class="row align-items-center">
                                            <div class="col-xl-7">
                                                <div class="experience-box pb-1">
                                                    <div class="experience-content">
                                                        <div class="experience-number text-texture">8</div><br class="d-block d-sm-none">
                                                        <div class="experience-info"><h2>Años<br>Creando<br>Historias </h2> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <h2 class="title-uppercase" style="font-family: 'Poppins', sans-serif"> <span class="text-primary">QUIENES SOMOS</span> </h2>

                                                <p style="color: white; text-align: justify;font-family: 'Poppins', sans-serif">
                                                    Somos una productora audiovisual joven
                                                    Nacemos de la unión de personas creativas con el deseo de contar historias a través de imagenes y videos que dejen una marca emocional en el espaectador.
                                                    Nuestro equipo está conformado por artistas en sonido, imagen, diseño, video, programación y marketing que trabajan con pasión para lograr un objetivo en común.
                                                </p>

                                                <div class="progress-bars">
                                                    <div class="clearfix" style="color: white; text-align: justify">
                                                        <div class="number float-left">Profesionales</div>
                                                        <div class="number float-right">100%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;font-family: 'Poppins', sans-serif" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="clearfix" style="color: white; text-align: justify">
                                                        <div class="number float-left">Originalidad </div>
                                                        <div class="number float-right">100%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;font-family: 'Poppins', sans-serif" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div data-anchor="page3" class="pp-scrollable text-white section section-3">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url({{asset('assets/images/bg/resume.png')}});"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title d-none d-lg-block"><span>Resumen</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row row-resume">
                                            <div class="col-md-6">
                                                <div class="col-resume">
                                                    <!--<h4 class="title-uppercase">QUE HACEMOS</h4>-->
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            <div class="resume-row">
                                                                <h6 class="resume-type" style="font-family: 'Poppins', sans-serif">QUE HACEMOS</h6>
                                                                <!--                <p class="resume-study">University of studies, Poland, Cracow</p>
                                                                                <p class="resume-date text-primary">Jan 2004 - Dec 2006</p>-->
                                                                <p class="resume-text" style="font-family: 'Poppins', sans-serif">
                                                                    Escuchamos la historia que nuestros clientes quieren contar y la potenciamos con estrategias para llegar a la memoria de sus clientes a través de emociones.
                                                                    Capturamos momentos en foto y video en calidad Ultra HD 4k a 60 fps con el objetivo de capturar hasta el más mínimo detalle para luego destacar lo que nuestros clientes requieran.
                                                                    Acusticamente grabamos, editamos y empleamos efectos de sonido según el proyecto lo requiera.
                                                                    Desarrollamos Apps y Webs para que nuestros clientes tengan una presencia profesional, porque como dijo Bill Gates en 2018 «si su negocio no está en Internet, tu negocio no existe.»
                                                                    Analizamos el público de cada cliente para lograr la efectividad comercial deseada.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-resume">
                                                    <!-- <h4 class="title-uppercase">QUE OFRECEMOS</h4>-->
                                                    <div class="resume-content">
                                                        <div class="resume-inner">
                                                            <div class="resume-row">
                                                                <h6 class="resume-type" style="font-family: 'Poppins', sans-serif">QUE OFRECEMOS</h6>
                                                                <!--    <p class="resume-study">University of studies, Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec 2006</p>-->
                                                                <p class="resume-text" style="font-family: 'Poppins', sans-serif">
                                                                    Tenemos un equipo de profesionales responsables de cada área, quienes se anticipan a las necesidades de cada cliente ofrenciendo originalidad y singularidad en cada proyecto.
                                                                    Ofrecemos un equipo de cámaras profesionales cinematográficas, sonido nítido... personal profesional, asesorías... alianzas con profesionales
                                                                    Distribución de contenidos a traves de nuestra plataforma.
                                                                </p>
                                                            </div>
                                                            <div class="resume-row">
                                                                <h6 class="resume-type" style="font-family: 'Poppins', sans-serif">QUE NOS DIFERENCIA</h6>
                                                                <!--    <p class="resume-study">University of studies, Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec 2006</p>-->
                                                                <p class="resume-text" style="font-family: 'Poppins', sans-serif">
                                                                    La diferencia indiscutible está en la creatividad de cada artista que se enfoca en hacer de cada proyecto una obra de arte. Y la exclusividad del contenido creado para nuestros clientes.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       {{-- <div data-anchor="page4" class="pp-scrollable section section-4">
            <div class="scroll-wrap">
                <!-- <div class="section-bg" style="background-image:url(images/bg/textura.png);"></div>-->
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-white d-none d-lg-block"><span>CLIENTES</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title-uppercase text-white">CONFIANZA DE LOS CLIENTES</h2>
                                        <div class="row row-partners">
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/1.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/2.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/3.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/4.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/5.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/6.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/7.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/8.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/9.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/10.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/11.png')}}"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                <div class="partner-inner"><img alt="" src="{{asset('assets/images/partners/12.png')}}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <div data-anchor="page5" class="pp-scrollable text-white section section-5">
            <div class="scroll-wrap">
                <!-- <div class="bg-changer">
                  <div class="section-bg" style="background-image:url(images/bg/textura.png);"></div>
                 </div>-->
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title  d-none d-lg-block"><span>NUESTROS TRABAJOS</span></div>
                            <div class="boxed">

                                <div class="intro">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <h2 class="title-uppercase text-white">PORTAFOLIO</h2>
                                            <div class="work__gallery">
                                                <div class="grid-sizer"></div>
                                                <div class="work__item wide__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-1.jpg')}}">

                                                    <!--<div class="col-md-6 intros text-end">
                                                     <div class="video-box">

                                                      <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                                                     <span>
                                                       <i class="fas fa-play-circle"></i>
                                                     </span>
                                                       <span class="border-animation border-animation&#45;&#45;border-1"></span>
                                                       <span class="border-animation border-animation&#45;&#45;border-2"></span>
                                                      </a>
                                                     </div>
                                                    </div>-->

                                                    <a href="https://www.youtube.com/watch?v=RZ96K09l0b4&t=8s" class="play-btn video-popup">
                                                        <i class="fa fa-play"></i>
                                                    </a>
                                                    <div class="work__item__hover">
                                                        <h4>PUBLICIDAD JUAN DIABLO</h4>
                                                        <ul>
                                                            <li>Video</li>
                                                            <li>Posproduccion</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="work__item small__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-2.jpg')}}">
                                                    <a href="https://www.youtube.com/watch?v=RZ96K09l0b4&t=8s" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                </div>
                                                <div class="work__item small__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-3.jpg')}}">
                                                    <a href="https://www.youtube.com/watch?v=zXhu1uIy1Po" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                </div>
                                                <div class="work__item large__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-4.jpg')}}">
                                                    <a href="https://www.youtube.com/watch?v=4TszsPROJws&t=16s" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                    <div class="work__item__hover">
                                                        <h4>PUBLICIDAD JUAN DIABLO</h4>
                                                        <ul>
                                                            <li>Video</li>
                                                            <li>Posproduccion</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="work__item small__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-5.png')}}">
                                                    <a href="https://www.youtube.com/watch?v=kkqCl3i_8L0" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                </div>
                                                <div class="work__item small__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-6.jpg')}}">
                                                    <a href="https://www.youtube.com/watch?v=7iAiCpD0o34&t=45s" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                </div>
                                                <div class="work__item wide__item set-bg" data-setbg="{{asset('assets/assetsvideo/img/work/work-7.png')}}">
                                                    <a href="https://www.youtube.com/watch?v=94-6i6fu5Bs" class="play-btn video-popup"><i
                                                            class="fa fa-play"></i></a>
                                                    <div class="work__item__hover">
                                                        <h4>GRABACION ELECTRONICO</h4>
                                                        <ul>
                                                            <li>Video</li>
                                                            <li>Musica</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="page7" class="pp-scrollable section section-7">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url({{asset('assets/images/bg/contact.jpg')}});"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="vertical-title text-white d-none d-lg-block"><span>Contáctame</span></div>
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro overflow-hidden">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2 class="title-uppercase"><span class="text-primary">TARIJA</span>,BOLIVIA</h2>
                                                <h5 class="text-muted">Comunidad Equiz Sud, La Buena Tierra.</h5>
                                                <section class="contact-address">
                                                    <h3><span class="phone">Cel: 63076039</span></h3>
                                                </section>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info">
                                                    <form class="js-form" novalidate="novalidate">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <input type="text" name="name" required="" placeholder="Nombre*" aria-required="true">
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <input type="email" required="" name="email" placeholder="Email*">
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                                <input type="text" name="subject" placeholder="Sujeto (Opcional)">
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                                <textarea name="message" required="" placeholder="Mensage*"></textarea>
                                                            </div>
                                                            <div class="form-group form-group-message col-sm-12">
                                                                <span id="success" class="text-primary">Thank You, your message is successfully sent!</span>
                                                                <span id="error" class="text-primary">Sorry, something went wrong </span>
                                                            </div>
                                                            <div class="col-sm-12"><button type="submit" class="btn">Contáctame</button></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!--<script src="js/smoothscroll.js"></script>-->
<script src="{{asset('assets/js/animsition.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.pagepiling.min.js')}}"></script>




<script src="{{asset('assets/assets/assets/vendors/glightbox/js/glightbox.min.js')}}"></script>

<script type="text/javascript">
    const lightbox = GLightbox({
        touchNavigation: true,
        elements: [
            {
                'href': 'https://youtu.be/GBu_CyiOHVk',
                'type': 'video',
                'source': 'youtube',
            },
            {
                'href': 'https://www.youtube.com/watch?v=vZ1X0djBOEw&t=60s',
                'type': 'video',
                'source': 'youtube',
            },
            {
                'href': 'https://youtu.be/r2_jN8c8Wb0',
                'type': 'video',
                'source': 'youtube',
            },
            {
                'href': 'https://www.youtube.com/watch?v=Ga6RYejo6Hk',
                'type': 'video',
                'source': 'youtube',
            },
            {
                'href': 'https://www.youtube.com/watch?v=Ga6RYejo6Hk',
                'type': 'video',
                'source': 'youtube',
            },
            {
                'href': 'https://www.youtube.com/watch?v=Ga6RYejo6Hk',
                'type': 'video',
                'source': 'youtube',
            },
        ],
        autoplayVideos: true,
    });
    lightbox.open();
</script>



<script src="{{asset('assets/assetsinicio/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets/assetsinicio/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('assets/assetsinicio/js/plugins/plugins.js')}}"></script>
<script src="{{asset('assets/assetsinicio/js/active.js')}}"></script>
<!--  -->
<!--somos-->
<script src="{{asset('assets/assetssomos/assets/lightbox/js/lightbox.min.js')}}"></script>
<!--video-->
<script src="{{asset('assets/assetsvideo/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/assetsvideo/js/jquery.slicknav.js')}}"></script>

<script src="{{asset('assets/assetsvideo/js/main.js')}}"></script>
<!--//-->
<script src="{{asset('assets/assets/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/scripts.js')}}"></script>

</body>

<!-- robert/  03:30:37 GMT -->
</html>
