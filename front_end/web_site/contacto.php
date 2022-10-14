<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Seattle Suc.Sta Tere</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <?php include_once ("component/header.php")?>


    <div>
        <img src="../Imagenes/azulejos.jpg" class="img_header" alt="">
    </div>

      <!--------------------------Contacto------------------------------------------------->
      <div class="contacto pb-5">
        <h2 class=" pt-5 mb-2">Contactanos  </h2>
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

     

      <?php include_once ("component/footer.php")?>
</body>
</html>