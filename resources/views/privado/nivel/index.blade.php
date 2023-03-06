@extends('privado.componentes.plantilla')

@section('titulo', 'Niveles Alumnos')

@section('main')


<h3 class="col-10  mx-auto">Niveles:</h3>

<div class="col-8 mx-auto mb-2 text-center">

  @include ('privado.nivel.formulario_crear')

</div>

<div class="col-10 mx-auto ">

  @include ('privado.nivel.data')
</div>


@endsection