@extends('welcome')

@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container px-md-0">
        <div class="row d-flex no-gutters">
            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4 heading">PONERSE EN CONTACTO</h3>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Nombre completo</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Dirección de correo electrónico</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Mensaje</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Enviar mensaje" class="btn btn-primary">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                <div class="info-wrap js-fullheight bg-primary w-100 p-md-5 p-4">
                    <h3>Mantengámonos en contacto</h3>
                    <p class="mb-4">Estamos abiertos a cualquier sugerencia o simplemente para tener una charla.</p>
                    <div class="dbox w-100 d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text pl-3">
                            <p><span>Dirección:</span> Ciudad de Tarija</p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text pl-3">
                            <p><span>Celular:</span> <a href="tel://1234567920">+591 71898453</a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text pl-3">
                            <p><span>Email:</span> <a href="mailto:19filmscrew@gmail.com">19filmscrew@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
