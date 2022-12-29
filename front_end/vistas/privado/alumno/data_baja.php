<?php
if (isset($_GET['resultado'])) {
    echo $_GET['resultado'];
}
$alumno = new Alumno();
$alumnos = $alumno->ver_bajas();



?>

<link rel="stylesheet" href="estilos.css">

<style>
    .tableIcon {
        width: 20%;
    }
    
</style>

<div class="scroller">
    <div class="row">
        <?php
        foreach ($alumnos as $alumno) {
        ?>

            <div class="card col-6 mt-3">
                <div class="card-body ">

                    <div class="row ">
                        <div class="col-3 d-none d-xl-block">
                            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
                        </div>

                        <div class="col-8 mx-auto d-xl-none">
                            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
                        </div>

                        <div class="col-8 mt-2 ml-auto d-none d-xl-block">
                            <div class="row text-center ">
                                <h5 class="card-title mb-3 pb-0 col-12 "><?php echo $alumno->nombres . " " . $alumno->apellido_pat . " " . $alumno->apellido_mat ?> </h5>
                                <!----------- Titulo claseso---------->

                                <ul class="col-5 p-0 ml-5 text-left">
                                    <h6 class="card-text  text-left">Clases: </h6>
                                    <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
                                    <li class="mb-0 d-inline">Lu. 4:00 - 4:30 </li>
                                    <li class="mb-0 ">Mie. 5:00 - 5:30 </li>
                                    <li class="mb-0 ">Sab. 10:00 - 10:30</li>
                                </ul>

                                <div class="col-4 p-0 m-0 ">
                                    <h6 class="card-text text-center titulo-profesor mb-0">Profe: </h6>
                                    <!---------------- Crear un for each para cada profesor asignado al alumno---------->
                                    <p class="card-text mb-0 profesor text-right ">Daniel </p>
                                    <p class="card-text mb-0 profesor text-right ">Rolando </p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!---------------- Smaller view------------------->
                    <div class="row d-block mt-2 d-xl-none">
                        <h5 class="card-title mb-3 pb-0 col-12 text-center"><?php echo $alumno->nombres . " " . $alumno->apellido_pat . " " . $alumno->apellido_mat ?> </h5>

                        <ul class=" col-10 p-0 mx-auto text-left">
                            <h6 class="card-text mb-0 text-left">Clases: </h6>
                            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
                            <li class="mb-0 text-center">Lu. 4:00 - 4:30 </li>
                            <li class="mb-0 text-center">Mie. 5:00 - 5:30 </li>
                            <li class="mb-0 text-center">Sab. 10:00 - 10:30</li>
                        </ul>


                        <div class="col-10 p-0 m-0 mb-3 mx-auto text-left">
                            <h6 class="card-text text-left mb-0">Profe: </h6>
                            <!---------------- Crear un for each para cada profesor asignado al alumno---------->
                            <p class="card-text mb-0 profesor text-center ">Daniel </p>
                            <p class="card-text mb-0 profesor text-center ">Rolando </p>
                        </div>

                    </div>

                    <div class="row ">

                        <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3"><?php echo $alumno->nivel ?></a>

                        <div class="col-6 ml-5 mt-2  mx-auto">
                            <h6 class="d-inline">Estatus: </h6>
                            <p class="d-inline baja"><?php echo $alumno->status ?></p>
                        </div>
                    </div>






                </div>

                <div class="card-footer bg-transparent ">


                    <div class="row mr-1 mb-2">
                        <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
                        <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
                        <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
                        <div class="col-3 text-center">
                            <a href="index_baja.php?id_alumno=<?php echo $alumno->id_alumno ?>&editar"><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
                            <a href="index_baja.php?id_alumno=<?php echo $alumno->id_alumno ?>&borrar"><img src="../../../PNGs/delete.png" class="tableIcon text-right m-2"> </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body p-2">
                                    <h6 class="mb-0">Comentarios:</h6>
                                    <?php echo $alumno->comentarios ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body p-2">
                                    <h6 class="mb-0">Domicilio:</h6>
                                    <?php echo $alumno->calle . " " . "#" . $alumno->numero ?>
                                    <br>
                                    Colonia: <?php echo $alumno->colonia  ?>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body p-2  text-center">
                                    <h6 class="mb-0">Cumpleaños:</h6>
                                    <?php echo $alumno->fecha_nac ?>
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