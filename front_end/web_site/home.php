<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escuela de Natación Seatle</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilos.css">
  <link rel="shortcut icon" href="../Imagenes/favicon.jpg">
</head>

<body>
<!-------------------------------Header y NavBar------------------------------------------------>
  <?php include_once ("component/header.php"); ?>
<!-------------------------------Main------------------------------------------------>
  <main>
      <!-------------------  -----Imagen-Inicio y C2A-------------------------------------------->
      <div class="imagen-header">
        <img src="../Imagenes/Alberca-2.jpg" class="img_header" alt="">
        <img src="../Imagenes/AlbercaV1.jpg" class="img_header vertical">
          <!-----------------------Texto-Header------------------------>
        <div class="texto-header-centrado">
          <h4> ¡Aprende a nadar con nosotros!</h4>
          <p class="p-header">Clases de natación grupales y personalizadas </p>
          <h3><a href="" class="link-informes">Solicitar Informes  </a> </h3>
        </div>
      </div>
      <!--------------------------Clases para niños--------------------------------------------->
      <div class="clases">
        <h2 class="pb-2">Clases para niñas y niños</h2>
        <div class="tipos-clases">
          <div class="particular">
            <a href="clases-ninos.php"><h5 class="pb-1">Particulares</h5></a>
            <ul class="lista-clases">
              <p class="list-clases-item"><img src="../PNGs/palomita.png" class="palomita" alt="">Clase personalizadas</p>
              <p class="list-clases-item"><img src="../PNGs/kid-swimmer.png" class="icono-list" alt="">Natación básica</p>
              <p class="list-clases-item"><img src="../PNGs/clock-25.png" class="icono-list" alt="">Duración de 25min</p>
              <p class="list-clases-item"><img src="../PNGs/baby.png" class="icono-list" alt="">Bebés a partir de 8 meses</p>
            </ul>
          </div>
          <div class="grupal">
            <a href="clases-ninos.php"><h5 class="pb-1">Grupales</h5></a>
            <ul class="lista-clases">
              <p class="list-clases-item"><img src="../PNGs/palomita.png" class="palomita" alt="">Grupos reducidos</p>
              <p class="list-clases-item"><img src="../PNGs/swimming.png" class="icono-list" alt="">Natación básica / avanzada</p>
              <p class="list-clases-item"><img src="../PNGs/clock-45.png" class="icono-list" alt="">Duración de 45min</p>
              <p class="list-clases-item"><img src="../PNGs/nadador (1).png" class="icono-list" alt="">Niños mayores de 4 años</p>
            </ul>
          </div>
        </div>
      </div>
      <!--------------------------Clases para adultos--------------------------------------------->
      <div class="clases">
            <h2 class="pb-2">Clases para adultos</h2>
            <div class="tipos-clases">
              <div class="grupal-adulto">
                <a href="clases-adulto.php"><h5 class="pb-1">Grupales</h5></a>
                <ul class="lista-clases">
                  <p class="list-clases-item"><img src="../PNGs/swimming.png" class="icono-list mr-3" alt="">Natación básica/ avanzada</p>
                  <p class="list-clases-item"><img src="../PNGs/usuarios.png" class="icono-list mr-3" alt="">Para mayores de 15 años</p>
                  <p class="list-clases-item"><img src="../PNGs/pool.png" class="icono-list mr-3" alt="">Grupos reducidos</p>
                  <p class="list-clases-item"><img src="../PNGs/clock-45.png" class="icono-list mr-3" alt="">Horario:</p>
                  <p class="horario-pequeño">07:00 am - 12:00pm</p>
                  <p class="horario-pequeño">19:30 pm - 20:30pm</p>
                </ul>
              </div>
            </div>
      </div>
      <!--------------------------Instalaciones------------------------------------------------->
      <div class="Instalaciones">
        <h2 class="pb-2">Instalaciones</h2>
        <div>
          <h6>¡Ven y conocenos!</h6>
        </div>
        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item  active">
              <img src="../Imagenes/Alberca-Arriba1.jpg" class="img-carrusel  " alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/clase.jpg" class="img-carrusel  " alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Entrada2.jpeg" class="img-carrusel  " alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Lateral.jpeg" class="img-carrusel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Mesa.jpeg" class="img-carrusel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Juegos1.jpeg" class="img-carrusel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Juegos 2.jpeg" class="img-carrusel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Esperas.jpg" class="img-carrusel" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../Imagenes/Alberca-3.jpg" class="img-carrusel  " alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
        <div>
          <ul class="list-instalaciones pt-2 pb-3 mx-auto ">
            <li class="list-instalaciones-item"><img src="../PNGs/guion.png" class="palomita" alt=""> Alberca desinfectada con bromo.</li>
            <li class="list-instalaciones-item"><img src="../PNGs/guion.png" class="palomita" alt="">Climatizada a 32°</li>
            <li class="list-instalaciones-item"><img src="../PNGs/guion.png" class="palomita" alt="">Area común.</li>
            <li class="list-instalaciones-item"><img src="../PNGs/guion.png" class="palomita" alt="">Zona de juegos.</li>
            <li class="list-instalaciones-item"><img src="../PNGs/guion.png" class="palomita" alt="">Regaderas.</li>
            <li class="list-instalaciones-item "><img src="../PNGs/guion.png" class="palomita" alt="">Vestidores.</li>
          </ul>
        </div>
      </div>
      <!--------------------------Ubicacion------------------------------------------------->
      <div class="cuarta_seccion pt-3">
        <h2 class="pb-2">Ubicación</h2>
        <!--------------------------Hide on bigger screens------------------------------>
        <div class="container d-sm-none">
          <div class="row">
            <div class="col mx-auto">
              <h6>Escuela de Natación Seatle, Suc. Sta Tere</h6>
              <img src="../Imagenes/Fuera.jpg" alt="" class="entrada">
              <p class="col-10 mx-auto texto-ubicacion pt-1 pb-1">Calle Gabriel Ramos Millán 732, Santa Teresita, 44600 Guadalajara, Jal.</p>
              
            </div>
            <div class="w-100 pt-2 pb-2"></div>
            <div class="col-10 mx-auto">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5539475757173!2d-103.36908808460106!3d20.687718504707984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428afcd3a9a3bf3%3A0xbe9f0339d8fc80e1!2sEscuela%20de%20Natacion%20Seattle%2C%20Suc.%20Santa%20Tere!5e0!3m2!1ses!2smx!4v1665419773453!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapita"></iframe>
            </div>
          </div>
        </div>
        <!--------------------------Hide on smaller screens------------------------------------------>
        <div class="container d-none d-sm-block">
          <div class="row">
            <div class="col mx-auto">
              <h5>Escuela de Natación Seatle, Suc. Sta Tere</h5>
              <p class="col-8 mx-auto">Calle Gabriel Ramos Millán 732, Santa Teresita, 44600 Guadalajara, Jal.</p>
              <img src="../Imagenes/Fuera.jpg" alt="" class="entrada">
            </div>
            <div class="col-6 mx-auto">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5539475757173!2d-103.36908808460106!3d20.687718504707984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428afcd3a9a3bf3%3A0xbe9f0339d8fc80e1!2sEscuela%20de%20Natacion%20Seattle%2C%20Suc.%20Santa%20Tere!5e0!3m2!1ses!2smx!4v1665419773453!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapita"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!--------------------------Contacto------------------------------------------------->
      <div class="contacto pb-5">
        <h2 class=" pt-5 ">Contactanos  </h2>
        <div class="col pt-2 ">
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
<!-------------------------------Footer------------------------------------------------>
  <?php include_once ("component/footer.php") ?>

</body>

</html>