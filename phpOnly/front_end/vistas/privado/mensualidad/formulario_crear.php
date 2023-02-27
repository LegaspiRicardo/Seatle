<?php
$alumno=new Alumno();
$alumnos=$alumno->leer_todo();
?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn_tutor" data-toggle="modal" data-target="#exampleModal13">
Reg. Mensualidad
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!----------- Styles----------------->
<link rel="stylesheet" href="../estilos.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Registro de Pago</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
      <form class="needs-validation" novalidate action="../../../back_end/controladores/mensualidad_controlador.php" method="POST" enctype="multipart/form-data" >

        <input type="hidden" name="opcion" value="1">

        <!------------------------------------Alumno------------------------------------------>
        <div class="form-row mb-3">
          <div class="Subtitulo ">
            <h4 >Seleccione:</h4>
          </div> 
          <div class="col-9 mx-auto">
          <input type="search" name="id_alumno" list="Alumnos" id="validationCustom01" class="form-control inputForm" required>
            <datalist   id="Alumnos"  >
            <?php foreach($alumnos as $alumno){ ?>
              <option value="<?php echo $alumno->id_alumno?> <?php echo $alumno->nombres . " " . $alumno->apellido_pat ." " . $alumno->apellido_mat ?>"> <?php echo $alumno->nombres . " " . $alumno->apellido_pat." " . $alumno->apellido_mat  ?></option>
            <?php
                }
              ?>
              </datalist> 
            <label for="validationCustom01">Alumn@</label>
          </div>

          <div class="col-3">
                <select name="tipo_clase" class="form-control" >
                    <option value="particular"> Particular</option>
                    <option value="grupo" >Grupal</option>
                    <option value="mixto" >Mixto</option>
                    <option value=" " selected hidden> </option>
                </select>
            <label for="validationCustom03">Tipo de Clase</label>
          </div>
        </div>
        <div class="Subtitulo">
            <h4 >Clases</h4>
          </div>
        <div class="form-row mb-3">
          <div class="col-6">
            <select name="num_clases" class="form-control inputForm" >
              <option value="1" >1 x Semana</option>
              <option value="2"> 2 x Semana</option>
              <option value="3" >3 x Semana</option>
              <option value="4" >4 x Semana</option>
              <option value="5" >5 x Semana</option>
              <option value=" " selected hidden> </option>
            </select> 
            <label for="validationCustom02">Clases por Semana</label>
          </div>


          <div class="col-6 ">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="precio_clase" required>          
            <label for="validationCustom02">Precio Mensual</label>
          </div>

        </div>

        <div class="form-row">
          <div class="col-4 mx-auto">
          <input type="text" class="form-control inputForm" id="validationCustom01" name="total" required>
                <label for="validationCustom01">Total</label>

          </div>


        </div>

    </div>

      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn_tutor mx-auto" value="Registrar Pago">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>

      </form>
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