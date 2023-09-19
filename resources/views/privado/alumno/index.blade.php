@extends('privado.componentes.plantilla')

@section('titulo', 'Alumnos')

@section('main')


  <h3 class="col-8 mx-auto">Alumnos activos:</h3>

  <div class="col-8 mx-auto mb-2 text-center">
    @include ('privado.alumno.formulario_crear')
  </div>

  <div class="col-11 mx-auto px-2 seccion-data-alumnos">
    @include ('privado.alumno.data')
  </div>


@endsection