@extends('layouts.template');
@section('content')

<div class="container text-center text-light fw-bold">
  <form action="" method='POST'>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id='nombre' name='nombre' type="text" class="form-control" value='{{old("nombre",$postulante->nombre)}}'>
      @error('nombre')
        <div class='text-danger'>
          <small>
            *{{$message}}
          </small>
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Edad</label>
      <input id='edad' name='edad' type="number" class="form-control" value='{{old("edad", $postulante->edad)}}'>
      @error('edad')
          <div class='text-danger'>
            <small>
              *{{$message}}
            </small>
          </div>
        @enderror
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
    <div class="text-center my-5"> 
      <div class="row row-cols-2">
        <div class="col">
          <a href='/list' type="button" class="btn btn-danger">Cancelar</a>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div>