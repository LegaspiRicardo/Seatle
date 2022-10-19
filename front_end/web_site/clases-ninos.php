<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases para niños</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="../Imagenes/favicon.jpg">
</head>

<body>
    <?php include_once ('component/header.php');?>    

    <div class=" col-12 mx-auto ">
        <div class="clases">
        <h2 class="pb-2">Clases para niñas y niños</h2>
        <div class="tipos-clases">
          <div class="particular">
            <a href="clases-ninos.php"><h5 class="pb-1">Particulares</h5></a>
            <img src="../Imagenes/clase.jpg" class="col-12 mx-auto mb-3 img-clases" alt="...">
            <p class="col-10 mx-auto">Contamos con clases personalizadas desde 1 día a la semana.</p>
            <ul class="lista-clases">
              <p class="list-clases-item"><img src="../PNGs/palomita.png" class="palomita" alt="">Clase personalizadas</p>
              <p class="list-clases-item"><img src="../PNGs/kid-swimmer.png" class="icono-list" alt="">Natación básica</p>
              <p class="list-clases-item"><img src="../PNGs/clock-25.png" class="icono-list" alt="">Duración de 25min</p>
              <p class="list-clases-item"><img src="../PNGs/baby.png" class="icono-list" alt="">Bebés a partir de 8 meses</p>
            </ul>
          </div>
          <div class="grupal">
            <a href="clases-ninos.php"><h5 class="pb-1">Grupales</h5></a>
            <img src="../Imagenes/clase.jpg" class="col-12 mx-auto mb-3 img-clases" alt="...">
            <p class="col-10 mx-auto">Contamos con grupos básicos y avanzados desde 2 alumnos.</p>
            <ul class="lista-clases">
              <p class="list-clases-item"><img src="../PNGs/palomita.png" class="palomita" alt="">Grupos reducidos</p>
              <p class="list-clases-item"><img src="../PNGs/swimming.png" class="icono-list" alt="">Natación básica / avanzada</p>
              <p class="list-clases-item"><img src="../PNGs/clock-45.png" class="icono-list" alt="">Duración de 45min</p>
              <p class="list-clases-item"><img src="../PNGs/nadador (1).png" class="icono-list" alt="">Niños mayores de 4 años</p>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <?php include_once ('component/contacto-form.php');?> 

    <?php include_once ('component/hora-atencion.php');?> 

    


    <?php include_once ('component/footer.php');?> 

</body>
</html>