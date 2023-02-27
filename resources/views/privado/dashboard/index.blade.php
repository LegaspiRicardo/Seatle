@extends('privado.componentes.plantilla')


@section('titulo', 'Panel de control')

@section('main')

  <section class=" col-8 mx-auto central">

    <h3 class=" col-8 mx-auto p-2 titulo_pasos_blanco">Pasos para registrar alumnos</h3>

    <!--------- Hide on smaller screens ------------------------------------->
    <div class="row mb-3">
      <div class=" col-3 mx-auto paso_tutor  ">
        <h5 class="subtitulo_pasos mt-2 d-none d-sm-block">Primer paso</h5>
        <h2 class="numero_pasos ">1</h2>
        <div class="btn-dashboard w-100 mb-2">
        @include ('privado.tutor.formulario_crear_dash')
        </div>
      </div>

      <div class="col-3 mx-auto paso_alumno">
        <h5 class="subtitulo_pasos_blanco mt-2 d-none d-sm-block">Segundo paso</h5>

        <h2 class="numero_pasos_blanco ">2</h2>
        <div class="btn-dashboard w-100 mb-2">
            @include ('privado.alumno.formulario_crear_dash')
        </div>
      </div>

    </div>
    <!-------- Force next columns to break to new line at md breakpoint and up ------------>
    <div class="w-100 row d-sm-none"></div>

    <div class="col-3 mx-auto paso_mensualidad">
      <h5 class="subtitulo_pasos mt-2 d-none d-sm-block">Tercer paso</h5>
      <h2 class="numero_pasos ">3</h2>
    </div>
    <div class="col-3 mx-auto paso_alumno">
      <h5 class="subtitulo_pasos_blanco mt-2 d-none d-sm-block">Cuarto paso</h5>
      <h2 class="numero_pasos_blanco ">4</h2>
    </div>


    <div class="row">
      <form action="../clase_part/eventos.php" method="POST" >
        <input type="hidden" name="opcion" value="1">
        <select id="id_profesor" name="id_profesor" class="form-control" value="id_profesor">
        </select>
        <input type="submit" value="Ver" class="btn btn-success" >
      </form>
    </div>

    <section class=" row d-inline central mx-auto">
      <div class="col pb-5 mt-2 pt-3 CalendarioWeb">
        <div class="row">
          <div class="" id="CalendarioWeb"></div>
        </div>
      </div>
    </section>
  </section>



  <script>
  $(document).ready(function() {
    $('#CalendarioWeb').fullCalendar({

      header: {
        left: 'today, prev, next',
        center: 'title ',
        right: 'month, agendaWeek, agendaDay'
      },

      dayClick: function(date, jsEvent, view) {
        //  alert("Dia selccionado: "+date.format());
        jQuery.noConflict();
        $("#exampleModal5").modal();

      },
      events: '../clase_part/eventos.php',
    });
  });
  </script>


  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Registrar clase particular</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="needs-validation" novalidate action="../../../../back_end/controladores/clase_part_controlador.php" method="POST">
          <input type="hidden" name="opcion" value="5">
          <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
          <div class="row mt-1">

            <div class="col-6 mr-auto">

              <label for="validationCustom07">Alumno</label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda">

              <select id="alumns" name="id_alumno" class="form-control">

              </select>

            </div>

            <div class="col-6 ml-auto">
              <label for="validationCustom07">Profesor</label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda">
              <select id="profes" name="id_profesor" class="form-control">

              </select>

            </div>


          </div>


          <br>
          <!------------------------------------Domicilio------------------------------------------>
          <div class="Subtitulo text-left">
            <h4>Fecha</h4>
            <img src="../../../PNGs/ubicacion.png" class="img_subtitulo" alt="">
          </div>
          <div class="form-row">
            <div class="col">
              <input type="date" class="form-control inputForm" id="validationCustom01" name="inicio" required>
              <label class="col" for="validationCustom01">Dia inicio</label>
            </div>

            <div class="col">
              <input type="date" class="form-control inputForm" id="validationCustom02" name="fin" required>
              <label class="col" for="validationCustom02">Dia fin</label>
            </div>
          </div>

          <div class="form-row">
            <div class="col-6 mx-auto">
              <input type="color" class="form-control inputForm" id="validationCustom03" name="color" required>
              <label class="col" for="validationCustom03">Color</label>
            </div>
          </div>


          <br>

          <div class="modal-footer">
            <input type="submit" class=" col-8 btn btn_tutor mx-auto" value="Agregar clase">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>

        </form>
      </div>
    </div>
  </div>
  </div>





@endsection

