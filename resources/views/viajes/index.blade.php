@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('viajes/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Numero De Plazas</th>
                <th>Fecha</th>
                <th>Otros Datos</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($viajes as $viaje)
            <tr>
              <td>{{ $viaje->id }}</td>
              <td>{{ $viaje->codigo }}</td>
              <td>{{ $viaje->numero_plazas }}</td>
              <td>{{ $viaje->fecha }}</td>
              <td>{{ $viaje->otros_datos }}</td>
              <td><a href="{{ url('viajes/'.$viaje->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('viajes/'.$viaje->id) }}" method="post">
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