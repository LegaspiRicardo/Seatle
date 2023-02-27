@extends('website.component.index')

@section('titulo', 'Galería Escuela de Natación')

@section('main')
<main>
    <h2 class="pt-4 mb-2">Galería</h2>
    <div class="filtro-imagenes col-2 text-right mb-3">
        <button id="todo" class="boton-filtro">Ver todo</button>
        <button id="alberca" class="boton-filtro">Alberca</button>
        <button id="instalaciones" class="boton-filtro">Instalaciones</button>
    </div>
    <!--------------------------Hide on smaller screens------------------------------------------>
    <div class="flex-container mb-5 d-none d-sm-flex ">
        <div>
            <img src="Imagenes/Entrada2.jpeg" alt="" class=" instalaciones">
        </div>
        <div>
            <img src="Imagenes/Alberca-Arriba1.jpg" alt="" class=" alberca">
        </div>
        <div>
            <img src="Imagenes/Mesa.jpeg" alt="" class=" instalaciones">
        </div>

        <div>
            <img src="Imagenes/popotess - copia.jpg" alt="" class=" alberca">
        </div>
        <div>
            <img src="Imagenes/Juegos1.jpeg" alt="" class=" instalaciones">
        </div>
        <div>
            <img src="Imagenes/clase.jpg" alt="" class=" alberca ">
        </div>

        <div>
            <img src="Imagenes/Esperas.jpg" alt="" class=" instalaciones">
        </div>
        <div>
            <img src="Imagenes/Pata-Elefante.jpeg" alt="" class=" instalaciones">
        </div>
        <div>
            <img src="Imagenes/clase-adultos.jpg" alt="" class="  alberca">
        </div>

        <div>
            <img src="Imagenes/Lateral.jpeg" alt="" class=" instalaciones">
        </div>
        <div>
            <img src="Imagenes/Alberca-3.jpg" alt="" class=" alberca">
        </div>
        <div>
            <img src="Imagenes/Fuera.jpg" alt="" class="  instalaciones">
        </div>


    </div>

    <!--------------------------Hide on bigger screens------------------------------------------>
    <div class=" d-sm-none">
        <div class="col-8  pb-3">
            <img src="Imagenes/Entrada2.jpeg" alt="" class="w-100 instalaciones">
        </div>
        <div class="col-8  pb-3">
            <img src="Imagenes/Alberca-Arriba1.jpg" alt="" class="w-100 alberca">
        </div>
        <div class="col-8  pb-3">
            <img src="Imagenes/Mesa.jpeg" alt="" class="w-100 instalaciones">
        </div>

            <div class="col-8 pb-3">
                <img src="Imagenes/popotess - copia.jpg" alt="" class="w-100 alberca">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/Juegos1.jpeg" alt="" class="w-100 instalaciones">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/clase.jpg" alt="" class="w-100 alberca">
            </div>

            <div class="col-8 pb-3">
                <img src="Imagenes/Esperas.jpg" alt="" class="w-100 mt-4 instalaciones">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/Pata-Elefante.jpeg" alt="" class="w-100 instalaciones">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/clase-adultos.jpg" alt="" class="w-100 mt-5 alberca">
            </div>

            <div class="col-8 pb-3">
                <img src="Imagenes/Lateral.jpeg" alt="" class="w-100 instalaciones">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/Alberca-3.jpg" alt="" class="w-100 alberca">
            </div>
            <div class="col-8 pb-3">
                <img src="Imagenes/Fuera.jpg" alt="" class="w-100 mt-3 instalaciones">
            </div>
    </div>
    

</main>
@endsection





