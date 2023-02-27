<?php
if (isset($_GET['resultado'])) {
  echo $_GET['resultado'];
}
$profesor = new Profesor();
$profesores = $profesor->leer_todo();
?>

<link rel="stylesheet" href="estilos.css">

<style>
  .cardIcon {
    max-width: 20px;
    display: inline;
    padding-bottom: 1%;
  }
</style>


<div class="scroller">
  <div class="row">
    <?php
    foreach ($profesores as $profesor) {
    ?>

      <div class="card col-6 mt-3">
        <div class="card-body ">
          <div class="col-8 mx-auto">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0 ">
          </div>

          <!---------------- Smaller view------------------->
          <div class="row d-block mt-2">
            <h5 class="card-title mb-3 pb-0 col-12 text-center"><?php echo $profesor->nombres . " " . $profesor->apellidos ?> </h5>
          </div>

          <div class="row ">
            <div class="col-6 ml-5 mt-2  mx-auto">
              <h6 class="d-inline">Telefono: </h6>
              <p class="d-inline telefono"><?php echo $profesor->telefono ?></p>
            </div>

            <div class="col-2 pt-2 p-0">
            <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&editar"><img src="../../../PNGs/editar.png" class="cardIcon text-right ml-3"> </a>

            </div>
          </div>






        </div>

        <div class="card-footer bg-transparent p-1 mt-2 mb-1">


          <div class="row mr-1 mb-2 mx-auto">

          <div class="col p-0">
            <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&borrar"><img src="../../../PNGs/delete.png" class="cardIcon  d-inline ml-3"> </a>
            <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&baja"><img src="../../../PNGs/human-error.png" class="cardIcon  d-inline ml-4"> </a>
            </div>

            <div class="col">
              <a class="btn-collapse p-0 text-center" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
            </div>

            <div class="col">
              <a class="btn-collapse p-0 text-center" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
            </div>


          </div>

          <div class="row">
            <div class="col-12">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body p-2">
                  <h6 class="mb-0">Comentarios:</h6>
                  <?php echo $profesor->comentarios ?>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body p-2  text-center">
                  <h6 class="mb-0">Cumpleaños:</h6>
                  <?php echo $profesor->fecha_nac ?>
                </div>
              </div>
            </div>
          </div>

        </div>



      </div>



    <?php
    }
    ?>

  </div>

</div>