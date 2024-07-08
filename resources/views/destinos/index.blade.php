@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('destinos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Otros Datos</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($destinos as $destino)
            <tr>
              <td>{{ $destino->id }}</td>
              <td>{{ $destino->codigo }}</td>
              <td>{{ $destino->nombre }}</td>
              <td>{{ $destino->otros_datos }}</td>
              <td><a href="{{ url('destinos/'.$destino->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('destinos/'.$destino->id) }}" method="post">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
            </tr>
           </tbody>
           @endforeach
        </table>
    </div>
</main>