@extends('welcome')

@section('content')
<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    <div class="container-fluid px-0">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url({{asset('assets/welcome/img/somos.jpg')}});">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
                    <h2 class="mb-4">Hola! Somos<span>19Films</span> Productora Audio Visual</h2>
                    <p>Somos una productora audiovisual joven
                        Nacemos de la unión de personas creativas con el deseo de contar historias a través de imagenes y videos que dejen una marca emocional en el espectador.
                        Nuestro equipo está conformado por artistas en sonido, imagen, diseño, video, programación y marketing que trabajan con pasión para lograr un objetivo en común.</p>
                    <div class="team-wrap row mt-4">
                        <div class="col-md-4 team">
                            <div class="img" style="background-image: url(images/team-1.jpg);"></div>
                            <h3>Cristian Jurado</h3>
                            <span>Director</span>
                        </div>
                        <div class="col-md-4 team">
                            <div class="img" style="background-image: url(images/team-2.jpg);"></div>
                            <h3>Carolina Aramayo</h3>
                            <span>Fotógrafa</span>
                        </div>
                        <div class="col-md-4 team">
                            <div class="img" style="background-image: url(images/team-3.jpg);"></div>
                            <h3>Adrian Choque</h3>
                            <span>Sistemas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
