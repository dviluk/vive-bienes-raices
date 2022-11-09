@extends('layouts.app')
@section('title', 'Contacto')
@section('content')
public static function all()
    {
        return self::_redes();
<!-- Breadcrumb -->
<img src="images/contact/contact-bg.png" class="d-block w-90" alt="...">
            <div style="position: absolute; width: 100%; height: 100%; top: 0;" class="d-flex justify-content-center align-items-center">
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
