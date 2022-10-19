<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios Seattle</title>

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
    <h2 class="pt-3 mb-3">Servicios</h2> 
    <div class="row row-cols-1 row-cols-md-2 servicios ">
  <div class=" mb-4">
    <div class="card">
      <img src="../Imagenes/clase.jpg" class="card-img-top mx-auto mt-3" alt="...">
      <div class="card-body">
       <a href="clases-ninos.php"> <h5 class="card-title"> Clases para niñas y niños</h5></a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="../Imagenes/clase-adultos.jpg" class="card-img-top mx-auto mt-3" alt="...">
      <div class="card-body">
       <a href="clases-adulto.php"> <h5 class="card-title">Clases para adultos</h5></a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="../Imagenes/rehab.jpg" class="card-img-top mx-auto mt-3" alt="...">
      <div class="card-body">
       <a href="terapia.php"> <h5 class="card-title">Terapia y rehabilitación medica</h5></a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="../Imagenes/confeti.jpg" class="card-img-top mx-auto mt-3" alt="...">
      <div class="card-body">
       <a href="eventos.php"> <h5 class="card-title">Eventos</h5></a>
      </div>
    </div>
  </div>
</div>

  </main>
<!-------------------------------Footer------------------------------------------------>
  <?php include_once ("component/footer.php") ?>

</body>

</html>