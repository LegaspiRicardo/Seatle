<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">


<style>
  .tableIcon {
    width: 17%;
  }
</style>

<div class="scroller">
  <div class="row ">
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>



      <!-- --------Footer -------------->
      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="card col-6 mt-3 mx-auto">
      <!-- --------Bigger screen size card body -------------->
      <div class="card-body pb-0 mb-3 d-none d-xl-block">

        <div class="row ">
          <div class="col-3 d-none d-xl-block">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen text-center p-0">
          </div>


          <div class="col-8 mt-2 ml-auto">
            <div class="row text-center ">
              <h5 class="card-title mb-3 pb-0 "> Nombre niñ@ </h5>
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

        <div class="row ">
          <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">Basico </a>
          <div class="col-8 ml-5 mt-2  mx-auto">
            <h6 class="d-inline">Fecha de pago: </h6>
            <p class="d-inline pago"> </p>
          </div>
        </div>

      </div>

      <!-- --------Smaller screen size card body -------------->
      <div class="card-body d-none d-md-block d-xl-none">
        <div class="row mb-2 text-center">
          <div class="col-2 mr-auto d-xl-none">
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen p-0">
          </div>


          <div class="col-8 mb-1 p-0">
            <h5 class="card-title pb-0 "> Eduardo Garibay Perez</h5>
            <p class="mb-0"># <b>1544</b></p>
          </div>
        </div>

        <div class="row p-0 mx-auto ">

          <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
          <ul class="p-0 col-9 text-center">
            <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
            <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
            <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
          </ul>

        </div>

        <div class="row p-0 m-0 mb-3 mx-auto text-left">
          <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
          <!---------------- Crear un for each para cada profesor asignado al alumno---------->
          <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
          <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
        </div>


        <div class="row">
          <div class="col-6 mr-auto p-0">
            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">Basico </a>
          </div>
          <div class="col-6 ml-auto p-0">
            <h6 class="">Fecha de pago: </h6>
            <p class="pago text-center mb-0">24/05/2023 </p>
          </div>
        </div>

      </div>





      <div class="card-footer p-0 bg-transparent ">
        <div class="row text-right mb-2">
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Domicilio</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Notas</a>
          <a class="col-3 btn-collapse" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Ver más</a>
          <div class="col-3 text-center p-0">
            <a><img src="../../../PNGs/editar.png" class="tableIcon text-right m-2"> </a>
            <a><img src="../../../PNGs/human-error.png" class="tableIcon text-right m-2"> </a>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body p-2">
                <h6 class="mb-0">Comentarios:</h6>

              </div>
            </div>
          </div>

          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body p-2">
                <h6 class="mb-0">Domicilio:</h6>

                <br>

              </div>
            </div>
          </div>


          <div class="col-11 mx-auto">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body p-2  text-center">
                <h6 class="mb-0">Cumpleaños:</h6>

              </div>
            </div>
          </div>
        </div>

      </div>



    </div>








  </div>

</div>