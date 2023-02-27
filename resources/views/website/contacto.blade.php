@extends('website.component.index')

@section('titulo', 'Contacto Escuela de Natación Sta.Teresita')

@section('main')
<main>
  <div class=" col-8 mx-auto">
    <img src="Imagenes/azulejos.jpg" class=" img-contacto col-12 mt-3" alt="">
  </div>

  <!--------------------------Contacto------------------------------------------------->
  <div class="contacto pb-5">
    <h2 class=" pt-5 mb-2">Contactanos </h2>
    <div class="col pt-0 ">
      <form method="POST" class="formulario mx-auto">
        <label for="correo" class="col-12 mb-0 mt-2">Correo:</label>
        <input type="mail" name="correo" class="col-12">

        <label for="telefono" class="col-12 mb-0 mt-2">Telefono:</label>
        <input type="text" name="telefono" class="col-12 ">

        <label for="mensaje" class="col-12 mb-0 mt-2">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-12 "></textarea>

        <input type="submit" value="Enviar" class="col-3 mt-3 boton-info">
      </form>
    </div>
  </div>
</main>
@endsection