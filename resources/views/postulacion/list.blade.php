@extends('layouts.template');
@section('content')

<!-- Tabla -->
<div class="container">
  <table class="table table-dark table-striped mt-4">
      <thead>
        <tr>
          <th scope='col'>Id</th>
          <th scope='col'>Nombre</th>
          <th scope='col'>Edad</th>
          <th scope='col'>Preferencias</th>
          <th scope='col'>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($postulantes as $postulante)
        <tr>
          <td>{{$postulante->id}}</td>
          <td>{{$postulante->nombre}}</td>
          <td>{{$postulante->edad}}</td>
          <td>{{$postulante->preferencias}}</td>
  
          <td>
            <form action="list/{{$postulante->id}}/delete">
              @csrf
              @method('DELETE')
              <a href="list/{{$postulante->id}}/edit" class='btn btn-info btn-sm'>Editar</a>
              <button type='submit' class='btn btn-danger btn-sm'>Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
  
  <div class="container text-center my-5">
    <a href="/" class="btn btn-secondary">Inicio</a>
  </div>