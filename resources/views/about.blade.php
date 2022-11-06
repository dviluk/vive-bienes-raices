@extends('layouts.app')
@section('title', 'Acerca')
@section('content')
{{-- <!-- Breadcrumb -->
<div class="breadcrumb-area bg-image section-ptb position-relative"
    style="background-size: cover;background-image: url({{url('images/about/about-bg.mp4')}})">
<div class="hero-bg"></div>
<div class="container">
    <div class="row breadcrumb">
        <div class="col">
            <h2>Acerca de nosotros</h2>
            <!-- breadcrumb-list start -->
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Acerca</li>
            </ul>
            <!-- breadcrumb-list end -->
        </div>
    </div>
</div>
</div>
<!--// Breadcrumb --> --}}

@include('includes.about')

<div class="section-service bg-gray section-pt section-pb-90" id="vision">
    <div class="container">
        <div class="row">
            <div class="row post-carousel-wrapper post-carousel-active-1">

                <div class="col-lg-12">
                    <!-- Start Single Post -->
                    <div class="section-title text-center" style="font-size: 18px">
                        <h2 id="vision">Visión</h2>
                        <p>Queremos integrarnos en cada célula empresarial y familiar, velar su sueño y tranquilidad
                            de
                            toda persona, así como proteger su negocio.</p>
                        <p>Queremos ser la única empresa de máximo nivel que contenga personal estratega
                            certificado,
                            que nos permita demostrar que somos capaces de vigilar y proteger con ahínco lo
                            encomendado
                            por nuestros clientes.</p>
                    </div>
                    <!-- End Single Post -->
                </div>

                <div class="col-lg-12">
                    <!-- Start Single Post -->
                    <div class="section-title text-center" style="font-size: 18px">
                        <h2 id="mision">Misión</h2>
                        <p>Somos una Empresa Estratega y Audaz, conocedores del cómo y cuando actuar, capaces de
                            detectar, enfrentar y resolver problemas aun inesperados por lo que permanecemos siempre
                            alerta, es por esto que nuestro personal al ritmo del reloj y el tiempo está siempre en
                            marcha, demostrando así nuestra vocación al servicio trascendental, somos comprometidos
                            a
                            proteger y salvaguardar a nuestros clientes y sus bienes, por lo que sutilmente
                            permanecemos
                            a su lado.</p>
                    </div>
                    <!-- End Single Post -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Project Count Area Start -->
<div class="project-count-area image-bg section-pt-90 section-pb"
    style="background-image: url(assets/images/bg/counter-bg.jpg)" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-count-inner domain-inner-bg">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 col-sm-6">
                            <!-- counter start -->
                            <div class="counter text-center mt-30">
                                <img src="{{url('images/icon/fun-01.png')}}" alt="">
                                <h3 class="counter-active">120</h3>
                                <p>Clientes satisfechos</p>
                            </div>
                            <!-- counter end -->
                        </div>
                        {{-- <div class="col-lg-3 col-sm-6">
                            <!-- counter start -->
                            <div class="counter text-center mt-30">
                                <img src="{{url('images/icon/fun-01.png')}}" alt="">
                        <h3 class="counter-active">150</h3>
                        <p>Unidades</p>
                    </div>
                    <!-- counter end -->
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Project Count Area End -->

{{-- <div class="section-service bg-gray section-pt section-pb-90" id="vision">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Visión</h2>
                    <div style="font-size: 18px">
                        <p>Queremos integrarnos en cada célula empresarial y familiar, velar su sueño y tranquilidad de
                            toda persona, así como proteger su negocio.</p>
                        <p>Queremos ser la única empresa de máximo nivel que contenga personal estratega certificado,
                            que nos permita demostrar que somos capaces de vigilar y proteger con ahínco lo encomendado
                            por nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-servic section-pt section-pb-90" id="mision">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Misión</h2>
                    <div style="font-size: 18px">
                        <p>Somos una Empresa Estratega y Audaz, conocedores del cómo y cuando actuar, capaces de
                            detectar, enfrentar y resolver problemas aun inesperados por lo que permanecemos siempre
                            alerta, es por esto que nuestro personal al ritmo del reloj y el tiempo está siempre en
                            marcha, demostrando así nuestra vocación al servicio trascendental, somos comprometidos a
                            proteger y salvaguardar a nuestros clientes y sus bienes, por lo que sutilmente permanecemos
                            a su lado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--// Page Conttent -->
@endsection