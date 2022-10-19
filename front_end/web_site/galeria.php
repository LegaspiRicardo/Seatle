<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería fotos Seattle</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="../Imagenes/favicon.jpg">

</head>

<body>
    <?php include_once ("component/header.php")?>

    <h2 class="pt-4 mb-2">Galería</h2>

    <!--------------------------Hide on smaller screens------------------------------------------>
        <div class="d-none d-sm-block">
                <div class="row ml-2 mr-2">
                    <div class="col-4">
                        <img src="../Imagenes/Entrada2.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Alberca-Arriba1.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Mesa.jpeg" alt="" class="w-100">
                    </div>
                </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-4">
                        <img src="../Imagenes/popotess - copia.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Juegos1.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/clase.jpg" alt="" class="w-100">
                    </div>
                </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-4">
                        <img src="../Imagenes/Esperas.jpg" alt="" class="w-100 mt-4">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Pata-Elefante.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/clase-adultos.jpg" alt="" class="w-100 mt-5">
                    </div>
                </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-4">
                        <img src="../Imagenes/Lateral.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Alberca-3.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-4">
                        <img src="../Imagenes/Fuera.jpg" alt="" class="w-100 mt-3">
                    </div>
                </div>
        </div>

    <!--------------------------Hide on bigger screens------------------------------------------>
        <div class=" d-sm-none">
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Entrada2.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Alberca-Arriba1.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Mesa.jpeg" alt="" class="w-100">
                    </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/popotess - copia.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Juegos1.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/clase.jpg" alt="" class="w-100">
                    </div>
                </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Esperas.jpg" alt="" class="w-100 mt-4">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Pata-Elefante.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/clase-adultos.jpg" alt="" class="w-100 mt-5">
                    </div>
                </div>

                <div class="row ml-2 mr-2 mt-3">
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Lateral.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Alberca-3.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-11 mx-auto pb-3">
                        <img src="../Imagenes/Fuera.jpg" alt="" class="w-100 mt-3">
                    </div>
                </div>
        </div>

    <?php include_once ("component/hora-atencion.php")?>
   
    <?php include_once ("component/footer.php")?>
    

</body>
</html>