<?php
$alumno = new Alumno();
$alumnos = $alumno->revisar_pago();

$profesor = new Profesor();
$profesores = $profesor->leer_todo();

?>



<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!----------- Styles----------------->
<link rel="stylesheet" href="../estilos.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

          <input type="hidden" name="opcion" value="1">

          <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
          <div class="Subtitulo text-left">

          </div>

          <div class="row mt-1">

            <div class="col-6 mr-auto">
              
            <label for="validationCustom07">Alumno</label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda">

              <select id="alumns" name="id_alumno" class="form-control">
                <?php foreach ($alumnos as $alumno) { ?>
                  <option value="<?php echo $alumno->id_alumno ?>"> <?php echo $alumno->nombres . " " . $alumno->apellido_pat  ?></option>
                <?php
                }
                ?>
              </select>

            </div>

            <div class="col-6 ml-auto">
              <label for="validationCustom07">Profesor</label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda">
              <select id="profes" name="id_profesor" class="form-control">
                <?php foreach ($profesores as $profesor) { ?>
                  <option value="<?php echo $profesor->id_profesor  ?>"  > <?php echo $profesor->nombres . " " . $profesor->apellidos  ?></option>
                <?php
                }
                ?>
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













  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>


  </body>

  </html>