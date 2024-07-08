@extends('layout/template')

@section('title', 'Editar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Editar Formulario</h2>

        @if ($errors->any())
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{url ('viajes/'.$viaje->id) }}" method="post">
            @method("PUT")
            @csrf

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="codigo" id="codigo" value="{{ $viaje->codigo }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="numero_plazas" class="col-sm-2 col-form-label">Numero De Plazas:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="numero_plazas" id="numero_plazas" value="{{ $viaje->numero_plazas }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-5">
                   <input type="date"  class="form-control" name="fecha" id="fecha" value="{{ $viaje->fecha }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="otros_datos" class="col-sm-2 col-form-label">Otros Datos:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="otros_datos" id="otros_datos" value="{{ $viaje->otros_datos }}" required>
                </div>
            </div>
            <a href="{{ url('viajes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>