@extends('layouts.template');
@section('content')

<div class="container text-center text-light fw-bold">
  <form action="" method='POST'>
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id='nombre' name='nombre' type="text" value='{{old("nombre")}}' class="form-control">
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
      <input id='edad' name='edad' type="number" value='{{old("edad")}}' class="form-control">
      @error('edad')
          <div class='text-danger'>
            <small>
              *{{$message}}
            </small>
          </div>
        @enderror
    </div>
    <div class="">
      <label for="" class="form-label mb-0">Preferencias</label>
    </div>
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
      <div class='row row-cols-2 row-cols-md-4'>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" value='Laravel' name='preferencias[]' @if(is_array(old("preferencias")) && in_array("Laravel", old("preferencias"))) checked @endif>
          <label class="btn btn-outline-secondary" for="btncheck1">Larabel</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value='php' name='preferencias[]' @if(is_array(old("preferencias")) && in_array("php", old("preferencias"))) checked @endif>
          <label class="btn btn-outline-secondary" for="btncheck2">php</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value='React' name='preferencias[]' @if(is_array(old("preferencias")) && in_array("React", old("preferencias"))) checked @endif>
          <label class="btn btn-outline-secondary" for="btncheck3">React</label>
        </div>
        <div class='col py-2 px-1 mx-0'>
          <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" value='JavaScript' name='preferencias[]' @if(is_array(old("preferencias")) && in_array("JavaScript", old("preferencias"))) checked @endif>
          <label class="btn btn-outline-secondary" for="btncheck4">JavaScript</label>
        </div>
      </div>   
    </div>
    <!-- Boton Guardar -->
    <div class="text-center my-5"> 
      <div class="row row-cols-2">
        <div class="col">
          <a href='/' type="button" class="btn btn-danger">Cancelar</a>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div>