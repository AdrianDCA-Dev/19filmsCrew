@extends('welcome')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="px-md-0">
        <div class="row d-flex no-gutters">
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <a href="{{asset('assets/welcome/img/1.jpg')}}" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url({{asset('assets/welcome/img/1.jpg')}});">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-expand"></span>
                        </div>
                    </a>
                    <div class="col-md-6">
                        <div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">

                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Retrato</span>
                                        <h2 class="mb-4"><a href="gallery.html">La Buena Tierra </a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Foto sacada desde las bodegas de LA BUENA TIERRA.</p>
                                    </div>

                                    <p><a href="https://www.youtube.com/watch?v=94-6i6fu5Bs" class="ima custom-btn">Ver Video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <a href="{{asset('assets/welcome/img/2.jpg')}}" class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url({{asset('assets/welcome/img/2.2.jpg')}});">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-expand"></span>
                        </div>
                    </a>
                    <div class="col-md-6">
                        <div class="text pt-5 px-md-5 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">Naturaleza</span>
                                        <h2 class="mb-4"><a href="gallery.html">Los Andes</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Grabacion, aprovechando la naturaleza de los Andes.</p>
                                    </div>
                                    <p><a href="single.html" class="custom-btn">Ver video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <a href="{{asset('assets/welcome/img/3.jpg')}}" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url({{asset('assets/welcome/img/3.3.jpg')}});">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-expand"></span>
                        </div>
                    </a>
                    <div class="col-md-6">
                        <div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Cultura</span>
                                        <h2 class="mb-4"><a href="gallery.html">Chapaca</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Session de fotografias chapacas en la ciudad de Tarija.</p>
                                    </div>
                                    <p><a href="single.html" class="custom-btn">Ver video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <a href="{{asset('assets/welcome/img/4.jpg')}}" class="col-md-6 order-md-last img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url({{asset('assets/welcome/img/4.4.jpg')}});">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-expand"></span>
                        </div>
                    </a>
                    <div class="col-md-6">
                        <div class="text pt-5 px-md-5 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">Cultura</span>
                                        <h2 class="mb-4"><a href="gallery.html">Chapacos</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Grabacion de un video folclorico Tarija.</p>
                                    </div>
                                    <p><a href="single.html" class="custom-btn">ver video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12">
                <a href="#" class="btn-custom-load d-block w-100 text-center py-4">Carga más <span class="fa fa-refresh"></span></a>
            </div>
        </div>
    </div>
</section>
@stop
@section('script')
    <script src="{{asset('assets/welcome/glightbox/js/glightbox.min.js')}}"></script>
    <script type="text/javascript">
        const lightbox = GLightbox({
            selector: '.ima',
        });
    </script>
@stop
