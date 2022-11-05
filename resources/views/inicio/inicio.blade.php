@extends('welcome')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="px-md-0">
        <div class="row d-flex no-gutters">

            @foreach ($inicios as $inicio)

                <div class="col-md-12 portfolio-wrap">
                    <div class="row no-gutters align-items-center">
                        <a href="{{ Storage::url($inicio->image) }}" class="col-md-6 img image-popup js-fullheight d-flex align-items-center justify-content-center" style="background-image: url(@if ($inicio->image)
                                                           {{ Storage::url($inicio->image) }}
                                                              @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg
                                                               @endif);">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-expand"></span>
                                </div>
                            </a>
                            <div class="col-md-6">
                                <div class="text pt-5 pl-0 px-lg-5 pl-md-4 ftco-animate">
                                    <div class="px-4 px-lg-4">

                                        <div class="desc">
                                            <div class="top">
                                                <span class="subheading">{{$inicio->tipo}}</span>
                                                <h2 class="mb-4"><a href="gallery.html">{{$inicio->Titulo}}</a></h2>
                                            </div>
                                            <div class="absolute">
                                                <p>{{$inicio->content}}</p>
                                            </div>

                                            <p><a href="{{$inicio->urlyoutube}}" class="popup-youtube custom-btn">Ver Video</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach



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
