@extends('layout/template')

@section('title', 'Registar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Registrar Formulario</h2>

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

        <form action="{{url ('destinos') }}" method="post">

            @csrf

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="codigo" id="codigo" value="{{ old('codigo') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>
            </div>


            <div class="mb-3 row">
                <label for="otros_datos" class="col-sm-2 col-form-label">Otros Datos:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="otros_datos" id="otros_datos" value="{{ old('otros_datos') }}" required>
                </div>
            </div>
            <a href="{{ url('destinos') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>