@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/hero/bg.jpg" class="d-block w-100" alt="...">
            <div style="position: absolute; width: 100%; height: 100%; top: 0; background-color: rgba(0, 0, 0, 0.2)"
                class="d-flex justify-content-center align-items-center">
                <div class=" animated slideInUp text-center">
                        <h1 class=" text-light font-weight-bold">“Un lugar para vibrar alto”</h1>
                    <a href="{{route('contact')}}#contact-form-title" class="btn">¿Desea agendar una cita?</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/hero/bg.jpg" class="d-block w-100" alt="...">
            <div class="hero-slide-item d-flex align-items-center image-bg"
                style="background-image: url({{url('images/hero/bg.jpg')}})">
                <div class="hero-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content text-left">

                                <a href="{{route('contact')}}#contact-form-title" class="btn">¿Desea agendar una
                                    cita?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/hero/About.jpg" class="d-block w-100" alt="...">

        </div>
    </div>

</div>
</div><!-- Hero Section End -->
<p></p>
</div>
<div class="carousel-item">
    <img src="..." class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
    <img src=images/hero/bg.jpg class="d-block w-100" alt="...">
    <div class="hero-slide-item d-flex align-items-center image-bg"
        style="background-image: url({{url('images/hero/bg.jpg')}})">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content text-left">
                        <h1>

                        </h1>
                        <a href="{{route('contact')}}#contact-form-title" class="btn">¿Desea agendar una cita?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<p></p>
<!-- Start Service Style-->
<div class="section-service">
    <div class="container-fluid plr_-0">
        <div class="row no-gutters row-0">

            <!-- Start Single Service -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="row-service-wrap_white">
                    <div class="service text-left service-6 medical-service">
                        <div class="icons">
                            <img src="{{url('images/icon/service-01.png')}}" alt="service icons">
                        </div>
                        <div class="content">
                            <!--Webcam Security-->
                            <h4>Verea Residencial</h4>
                            <p>Vivir entre jardines y 
caminos, VEREA te invita a 
dar un respiro y a convivir 
con tu entorno. En cada 
espacio diseñado creamos 
una historia que te inspira 
a cumplir tus metas y vivir 
tus sueños.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->

            <!-- Start Single Service -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="row-service-wrap">
                    <div class="service text-left service-6 medical-service service-bg-2">
                        <div class="icons">
                            <img src="{{url('images/icon/service-02.png')}}" alt="service icons">
                        </div>
                        <div class="content">
                            <h4>Senya Residencial</h4>
                            <p>Un desarrollo de espacios vanguardistas, 
de convivencia social y recreativos.
En sus áreas comun engloba las necesidades de cada uno de sus hábitates (sin 
importar genero y edad), espacios donde 
pueden expresarse de forma artística, deportiva y/o cultural </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->

            <!-- Start Single Service -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="row-service-wrap_white">
                    <div class="service text-left service-6 medical-service">
                        <div class="icons">
                            <img src="{{url('images/icon/service-03.png')}}" alt="service icons">
                        </div>
                        <div class="content">
                            <h4>Torre Francia</h4>
                            <p>Mas que un estilo de vida.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->

            <!-- Start Single Service -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="row-service-wrap">
                    <div class="service text-left service-6 medical-service service-bg-2">
                        <div class="icons">
                            <img src="{{url('images/icon/service-04.png')}}" alt="service icons">
                        </div>
                        <div class="content">
                            <h4>Valle del mar.</h4>
                            <p>Gran espacio para disfrutar de la tranquilidad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Service -->

        </div>
    </div>
</div>
<!-- End Service Style-->

@include('includes.about')

<!-- Start Service Style-->
<div class="section-service bg-gray section-pt section-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Nuestros Proyectos</h2>
                </div>
            </div>
        </div>
        <div class="row post-carousel-wrapper post-carousel-active-5 ">

            @foreach($servicios as $servicio)
            <div class="col-lg-12">
                <!-- Start Single Post -->
                <div class="post-carousel mb-30">
                    <div class="thumb">
                        <a href="{{route('service', ['slug' => $servicio->slug])}}">
                            <img src="{{$servicio->imagen}}" alt="elementor">
                        </a>
                    </div>
                    <div class="ptc-content">
                        <h4><a href="{{route('service', ['slug' => $servicio->slug])}}">{{$servicio->titulo}}</a></h4>
                        <p>{!! substr($servicio->descripcion, 0, 150) !!}...</p>
                        <div class="post-btn">
                            <a class="readmore-btn btn btn-circle"
                                href="{{route('service', ['slug' => $servicio->slug])}}">LEER MAS</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Post -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Service Style-->

<!-- Start Choose Us Area -->
<div class="reapir-choose-us section-ptb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="reapir-choose-inner">
                    <div class="section-title title-2">
                        <h2>Por que escogernos</h2>
                    </div>
                    <div class="choose-resone-inner mt-20">


                        <p>Mayor plusvalía.</p>

                        <!-- Start Single Service -->
                        <div class="service text-left service-6 reapir-service mt-30">
                            <div class="icons">
                                <img src="{{url('images/icon/c-01.png')}}" alt="service icons">
                            </div>
                            <div class="content">
                                <h4>Cotizaciones</h4>
                                <p>Te cotizamos sin nungun costo</p>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <!-- Start Single Service -->
                        <div class="service text-left service-6 reapir-service">
                            <div class="icons">
                                <img src="{{url('images/icon/c-02.png')}}" alt="service icons">
                            </div>
                            <div class="content">
                                <h4>Servicios las 24/7</h4>
                                <p>Te asesoramos si deseas adquirir tu inmueble en Puerto Vallarta..</p>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <!-- Start Single Service -->
                        <div class="service text-left service-6 reapir-service">
                            <div class="icons">
                                <img src="{{url('images/icon/c-03.png')}}" alt="service icons">
                            </div>
                            <div class="content">
                                <h4>Financiamiento</h4>
                                <p>Cofinavit total, crédito hipotecario, contado.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Service -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_form_container repair-request-form">
                    <div class="ct-title-2">
                        <h2>Solicita una cotizacion</h2>
                    </div>
                    <div class="repair-service-form">
                        <form id="contact-form" method="POST" action="{{ route('contact.post') }}">
                            <div class="row">
                                <div class="col-lg-12 mb-30">
                                    <input name="name" type="text" placeholder="Nombre*" required />
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <input name="email" type="email" placeholder="Correo*" required />
                                </div>
                                <input name="subject" type="hidden" placeholder="Asunto*" value="Cotizacion" />
                                <div class="col-lg-12  mb-30">
                                    <textarea name="message" placeholder="Mensaje*" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="readmore-btn btn">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege" style="white-space: pre-line"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Us Area -->
@endsection