@extends('adminlte::page')

@section('title', 'Cazamed')

@section('content_header')
    <h1>Cazamed</h1>
@stop

@section('content')
<h2>Datos estadísticos</h2>
<figure>
    <img class="w-full object-cover" src="{{ asset('img/home/grafica.jpg') }}" alt="">
</figure>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop