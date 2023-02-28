@extends('privado.componentes.plantilla')

@section('titulo', 'Tutores')

@section('main')

  <h3 class="col-10 mx-auto">Tutores registrados:</h3>
  <div class="col-10 mx-auto ">
    @include ('privado.tutor.formulario_crear')
    @include ('privado.tutor.data')
  </div>

@endsection