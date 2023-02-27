@extends('privado.componentes.plantilla')

@section('titulo', 'Profesores')

@section('main')

  <div class="main col-12 mb-5 pl-0">
    <h3 class="col-6 ml-5">Profesores registrados:</h3>
    
    @include ('privado.profesor.data')
    
    @include ('privado.profesor.formulario_crear')
  </div>

@endsection