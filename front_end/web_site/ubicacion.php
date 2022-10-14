<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicacion Seattle Suc.Sta Tere</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include_once ("component/header.php")?>


    <h2 class="mt-2">¡Ven y conocenos!</h2>

    <div class="cuarta_seccion pt-1">
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

    <div class="col-12 mx-auto pb-3 pt-5">
        <div class="row mx-auto hora-atencion pb-3">
        <h5 class="mb-0">Horario de atención</h5>
        <p class="col-6 mb-0 mx-auto hora-servicio">Lunes a Viernes</p>
        <p class="col-6 mb-0 mx-auto hora-servicio">Sábados</p>
        <p class="col-6 mb-0 mx-auto hora-servicio">7:00 – 12:00 y 14:00 – 20:00</p>
        <p class="col-6 mb-0 mx-auto hora-servicio">9:00 – 12:00</p>
        </div>    
    </div>

   
    <?php include_once ("component/footer.php")?>
    
</body>
</html>