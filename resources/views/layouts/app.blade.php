<?php
$servicios = \App\Servicios::all();
$contactos = \App\Contactos::all();
$redes = \App\Redes::all();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Vive en Vallarta Bienes Raíces</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!--Have any question ? +215 2145 2154-->
                        <p>¿Tienes preguntas? 322 244 1516</p>
                    </div>
                    <div class="col-lg-6  col-md-6">
                        <ul class="socail-top">
                            @foreach ($redes as $red)
                            <li><a href="{{$red->link}}" title="{{$red->nombre}}"><i class="zmdi zmdi-{{$red->icon}}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-md-8 col-8">
                        <div class="cuscol">
                            <div class="logo">
                                <a href="{{route('home')}}" style="font-size: 18px; display: flex; flex-direction: row; align-items: center;" class="font-weight-bold">
                                    <img src="{{url('images/logo/logo.png')}}" style="max-height: 100px" alt="logo">
                                    <span style="margin-left: 20px;">Vive en Vallarta Bienes Raíces</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 d-none d-lg-block">
                        <div class="menu-area d-flex align-items-center justify-content-end">
                            <nav class="main-menu text-center">
                                <ul>
                                    <!--HOME-->
                                    <li><a href="{{route('home')}}">Inicio</a></li>
                                    <!--ABOUT-->
                                    <li>
                                        <a href="{{route('about')}}">Acerca</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('about')}}#vision">Vision</a></li>
                                            <li><a href="{{route('about')}}#mision">Misión</a></li>
                                        </ul>
                                    </li>
                                    <!--services-->
                                    <li><a href="#">Prototipos</a>
                                        <ul class="sub-menu">
                                            @foreach ($servicios as $servicio)
                                            <li><a href="{{ route('service', ['slug' => $servicio->slug]) }}">{{$servicio->titulo}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!--contact-->
                                    <li><a href="{{route('contact')}}">Contacto</a></li>
                                </ul>
                            </nav>
                            <!--// main-menu -->
                            <div class="header-btn text-right">
                                <!--appointment-->
                                <a class="btn-circle btn-transparent btn" href="{{route('contact')}}#contact-form-title">Agendar una
                                    cita</a>
                            </div>
                        </div>
                    </div>

                    <!-- Show in small device Start -->
                    <div class="clickable-menu clickable-mainmenu-active d-block d-lg-none  col-md-4 col-4">
                        <a href="#"><i class="zmdi zmdi-menu"></i></a>
                    </div>
                    <div class="clickable-mainmenu">
                        <div class="clickable-mainmenu-icon">
                            <button class="clickable-mainmenu-close">
                                <span class="zmdi zmdi-close"></span>
                            </button>
                        </div>

                        <div id="menu" class="text-left clickable-menu-style">
                            <ul>
                                <!--HOME-->
                                <li><a href="{{route('home')}}">Inicio</a></li>
                                <!--ABOUT-->
                                <li>
                                    <a href="{{route('about')}}">Acerca</a>
                                </li>
                                <!--services-->
                                <li><a href="#">Servicios</a>
                                    <ul>
                                        @foreach ($servicios as $servicio)
                                        <li><a href="{{ route('service', ['slug' => $servicio->slug]) }}">{{$servicio->titulo}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!--contact-->
                                <li><a href="{{route('contact')}}">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="mobile-more-info">
                            <ul class="socail-top">
                                @foreach ($redes as $red)
                                <li><a href="{{$red->link}}" title="{{$red->nombre}}"><i class="zmdi zmdi-{{$red->icon}}"></i></a></li>
                                @endforeach
                            </ul>

                            <p>¿Tiene alguna pregunta?, Contactenos!</p>
                        </div>

                        <div class="header-btn text-center my-4">
                            <a class="btn-circle btn-transparent btn" href="{{route('contact')}}">Contactenos</a>
                        </div>

                        <div>
                            @foreach($contactos as $contacto)
                            <p>
                                <strong>{{$contacto->estado}}</strong><br />
                                {{$contacto->calle}}<br />
                                {{$contacto->colonia}}<br />
                            </p>
                            <div class="ft-address mb-20">
                                @foreach ($contacto->telefonos as $tel)
                                <p>Tel: {{$tel}}</p>
                                @endforeach
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- Show in small device End -->
                </div>
            </div>
        </div>
    </header>
    <!--// Header -->

    <main>
        @yield('content')
    </main>
    <!--// Page Conttent -->

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top bg-gray section-pt-90 section-pb">
            <div class="container">
                <div class="row">

                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-style-1">
                            <h5 class="ft-title">ACERCA DE <span>NOSOTROS</span></h5>
                            <div class="content">
                                <p>Vive en Vallarta Bienes Raíces, sector inmobiliario en Puerto Vallarta</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-style-1 space-left">
                            <h5 class="ft-title"><span>CONTACTANOS</span></h5>
                            <div class="content">
                                @foreach($contactos as $contacto)
                                <p>
                                    <strong>{{$contacto->estado}}</strong><br />
                                    {{$contacto->calle}}<br />
                                    {{$contacto->colonia}}<br />
                                </p>
                                <div class="ft-address mb-20">
                                    @foreach ($contacto->telefonos as $tel)
                                    <p>Tel: {{$tel}}</p>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-style-1 space-left">
                            <h5 class="ft-title"><span>ENLACES</span> RÁPIDOS</h5>
                            <div class="content">
                                <ul class="ft-menu">
                                    <li><a href="{{route('about')}}">Acerca</a></li>
                                    <li><a href="{{route('about')}}#vision">Vision y Mision</a></li>
                                    <li><a href="{{route('contact')}}">Contacto</a></li>
                                    @foreach ($servicios as $servicio)
                                    <li><a href="{{ route('service', ['slug' => $servicio->slug]) }}">{{$servicio->titulo}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-style-1">
                            <h5 class="ft-title">REDES <span>SOCIALES</span></h5>
                            <div class="content">
                                <div class="social-share social-square">
                                    @foreach ($redes as $red)
                                    <a title="{{$red->nombre}}" href="{{$red->link}}"><i class="fa fa-{{$red->icon}}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-left content text-center">
                            <p>VIVEENVALLARTA &copy;. Todos los derechos reservados</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--// Footer -->

    <!-- JS
============================================ -->

    @yield('js-before')
    <!-- Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

    @yield('js')


</body>

</html>