

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Panel de Control</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
   
<link rel="stylesheet" href="dashboard.css">

  </head>

<body >



<?php 
              include_once ("../componentes/aside.php");
            ?>


<section class="col  pb-2 pasos_ingreso">
  
<h3 class=" col-8 mx-auto p-2 titulo_pasos_blanco">Pasos para registrar alumnos</h3>
  <div class="row ">
      <div class="col-3 mx-auto paso_tutor">
            <h5 class="subtitulo_pasos mt-2">Primer paso</h5>
            
            <h2 class="numero_pasos ">1</h2>
            <?php 
              include_once ("../tutor_modal/index_dash.php");
            ?>
      </div>

      <div class="col-3 mx-auto paso_alumno">
            <h5 class="subtitulo_pasos_blanco mt-2">Segundo paso</h5>
            
            <h2 class="numero_pasos_blanco ">2</h2>
            <?php 
              include_once ("../alumno_modal/index_dash.php");
            ?>
      </div>
      </div>
          <div class="col-3 mx-auto paso_mensualidad">
          <h5 class="subtitulo_pasos mt-2">Tercer paso</h5>
            
            <h2 class="numero_pasos ">3</h2>
          <?php 

            include_once ("../mensualidad_modal/index_dash.php");
            
          ?>
          </div>
          
  </div>

  
</section> 




</body>
</html>