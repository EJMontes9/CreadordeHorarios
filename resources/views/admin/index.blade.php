@extends('adminlte::page')

@section('title', 'Administrador FCA')

@section('content_header')
    <h1 class="ml-2 mt-3 font-weight-bold">Sistema de Gestión de Docentes de la Facultad de Ciencias Administrativas</h1>
@stop

@section('content')
    <p class="ml-2 mt-3 text-lg mb-4">
        Bienvenido al panel del Administrador
    </p>
@stop

@section('css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .brand-link .brand-image {
            border-radius: 0 !important;
            box-shadow: none !important;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Welcome!');
    </script>
@stop
