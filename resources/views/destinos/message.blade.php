@extends('layout/template')

@section('title', 'Registar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>

        <a href="{{ url('destinos') }}" class="btn btn-secondary">Regresar</a>
    </div>
</main>