@extends('privado.componentes.plantilla')

@section('titulo', 'Tutores')

@section('main')

<div class="main col-12 mb-5 pl-0">
  <h3 class="col-6 ml-5">Tutores registrados:</h3>
  <div class="col-6 ">
    @include ('privado.tutor.formulario_crear')
    @include ('privado.tutor.data')
  </div>
</div>

@endsection