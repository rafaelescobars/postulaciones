@extends('layouts.template');
@section('content')

<div class="container text-center text-light fw-bold">
  <form action="" method='POST'>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id='nombre' name='nombre' type="text" class="form-control" value='{{$postulante->nombre}}'>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Edad</label>
      <input id='edad' name='edad' type="number" class="form-control" value='{{$postulante->edad}}'>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Preferencias</label>
    </div>
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
      <div class='row row-cols-2 row-cols-md-4'>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" value='Larabel' name='preferencias[]'>
          <label class="btn btn-outline-secondary" for="btncheck1">Larabel</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value='php' name='preferencias[]'>
          <label class="btn btn-outline-secondary" for="btncheck2">php</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value='React' name='preferencias[]'>
          <label class="btn btn-outline-secondary" for="btncheck3">React</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" value='JavaScript' name='preferencias[]'>
          <label class="btn btn-outline-secondary" for="btncheck4">JavaScript</label>
        </div>
      </div>   
    </div>
    <!-- Boton Guardar -->
    <div class="text-center mt-3"> 
      <a href='/list' type="button" class="btn btn-danger mx-5">Cancelar</a>
      <button type="submit" class="btn btn-info mx-5">Guardar</button>
    </div>
  </form>
</div>