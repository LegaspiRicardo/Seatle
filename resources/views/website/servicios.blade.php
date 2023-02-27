@extends('website.component.index')

@section('titulo', 'Servicios Escuela de Natación Sta.Teresita')

@section('main')
<main>
  <h2 class="pt-3 mb-3">Servicios</h2>
  <div class="row row-cols-1 row-cols-md-2 servicios ">
    <div class=" mb-4">
      <div class="card">
        <a href="{{ route('clases-ninos') }}" class="mx-auto"> <img src="Imagenes/clase.jpg" class="card-img-top  mt-3" alt="..."></a>
        <div class="card-body">
          <a href="{{ route('clases-ninos') }}">
            <h5 class="card-title"> Clases para niñas y niños</h5>
          </a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <a href="{{ route('clases-adultos') }}" class="mx-auto"> <img src="Imagenes/clase-adultos.jpg" class="card-img-top mx-auto mt-3" alt="..."></a>
        <div class="card-body">
          <a href="{{ route('clases-adultos') }}">
            <h5 class="card-title">Clases para adultos</h5>
          </a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <a href="{{ route('terapia-rehabilitacion') }}" class="mx-auto"> <img src="Imagenes/rehab.jpg" class="card-img-top mx-auto mt-3" alt="..."></a>
        <div class="card-body">
          <a href="{{ route('terapia-rehabilitacion') }}">
            <h5 class="card-title">Terapia y rehabilitación medica</h5>
          </a>
        </div>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card">
        <a href="{{ route('eventos') }}" class="mx-auto"> <img src="Imagenes/confeti.jpg" class="card-img-top mx-auto mt-3" alt="..."></a>
        <div class="card-body">
          <a href="{{ route('eventos') }}">
            <h5 class="card-title">Eventos</h5>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection