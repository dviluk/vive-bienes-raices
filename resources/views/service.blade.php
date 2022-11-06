@extends('layouts.app')
@section('title', 'Servicios')
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-area bg-image section-ptb position-relative" style="background-size: cover;background-image: url({{url('images/serviece/services-bg-2.png')}})">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="row breadcrumb">
            <div class="col">
                <h2>Nuestros servicios</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Servicios</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

<!-- Start Service Style-->
<div class="section-service bg-gray section-pt section-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <!-- Nav tabs -->
                <ul role="tablist" class="nav flex-column service-details-menu dashboard-list">
                    @foreach($servicios as $servicio)
                    <li><a href="{{route('service', ['slug' => $servicio->slug])}}#detalles" data-toggle="tab" class="nav-link {{ $servicioActual->slug === $servicio->slug ? 'active' : '' }}">{{$servicio->titulo}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12 col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content dashboard-content" id="detalles">
                    @foreach ($servicios as $servicio)
                    <div class="tab-pane {{ $servicioActual->slug === $servicio->slug ? 'active' : '' }}" id="{{$servicio->slug}}">
                        <div class="service-details-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service-details-lg-image">
                                        <img src="{{$servicio->imagen}}" alt="" style="width: 100%">
                                    </div>
                                    <div class="service-details-cont mt-30">
                                        <h4 class="service-title">{{$servicio->titulo}}</h4>
                                        {!! $servicio->descripcion !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service Style-->
@endsection