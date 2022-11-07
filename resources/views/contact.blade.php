@extends('layouts.app')
@section('title', 'Contacto')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area bg-image section-ptb position-relative" style="background-size: cover; background-image: url({{ url('images/contact/contact-bg.jpg') }})">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="row breadcrumb">
            <div class="col">
                <h2>Contactanos</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Contactanos</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- Start Google-map Area -->
<div class="google-map">
    <div id="googleMap-2" class="embed-responsive-item contact-map" data-lat="20.6398937" data-Long="-105.2616057">
    </div>
</div>
<!-- End google-map Area -->

<div class="contact-form-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-7 col-12">
                <div class="form_wrapper form-style-1">
                    <div class="contact-title text-center">
                        <div class="title-3">
                            <h3 id="contact-form-title">Envianos un mensaje</h3>
                        </div>
                    </div>
                    <div class="form-inner-box-warp">
                        <form id="contact-form" method="POST" action="{{ route('contact.post') }}">
                            <div class="row">
                                <div class="col-lg-12 mb-30">
                                    <input name="name" type="text" placeholder="Nombre*" required />
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <input name="email" type="email" placeholder="Correo*" required />
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <input name="subject" type="text" placeholder="Asunto*" required />
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <textarea name="message" placeholder="Mensaje*" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="submit-btn default-btn">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege" style="white-space: pre-line"></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 offset-lg-0 col-md-5">
                <div class="contact-info-wrapper">
                    <div class="contact-title text-center">
                        <div class="title-3">
                            <h3>Contactanos</h3>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="row">
                            @foreach ($contactos as $contacto)
                            <div class="col-lg-4 col-md-12 col-sm-6">
                                <ul>
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-map-marker"></i>
                                            <p>
                                                <strong>{{$contacto->estado}}</strong><br />
                                                {{$contacto->calle}}<br />
                                                {{$contacto->colonia}}<br />
                                            </p>
                                        </div>
                                    </li>
                                    @if (count($contacto->telefonos) > 0)
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-phone"></i>
                                            <p>
                                                @foreach ($contacto->telefonos as $telefono)
                                                <a href="tel:{{str_replace(" ", "", $telefono)}}">{{$telefono}}</a>
                                                @endforeach
                                            </p>
                                        </div>
                                    </li>
                                    @endif
                                    @if (count($contacto->emails) > 0)
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-globe"></i>
                                            <p>
                                                <a href="#">asesoria@viveenvallartabienesraices.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-before')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMpS5O_sDhWUyOiXoC5oe72ghWtYsl_ZU"></script>
@endsection