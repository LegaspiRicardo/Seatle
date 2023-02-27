@extends('privado.componentes.plantilla')

@section('titulo', 'Alumnos')

@section('main')


<h3 class="col-10  mx-auto">Alumnos activos:</h3>



<div class="col-10 mx-auto ">
  @include ('privado.alumno.data')
</div>


@endsection