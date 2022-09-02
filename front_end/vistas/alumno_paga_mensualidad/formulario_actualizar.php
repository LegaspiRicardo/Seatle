
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $alumno_paga_mensualidad=new Alumno_paga_mensualidad();
  if(isset($_GET['id__alumno_mensualidad']) && isset($_GET['editar'])){
    $alumno_paga_mensualidad->id_mensualidad=$_GET['id_alumno_mensualidad'];
    $alumno_paga_mensualidad=$alumno_paga_mensualidad->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal5").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Modificar Fecha Pago</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../back_end/controladores/alumno_paga_mensualidad_controlador.php" method="GET" enctype="multipart/form-data">

          <input type="hidden" name="opcion" value="2">
          <input type="hidden" name="id_mensualidad" value="<?php echo $alumno_paga_mensualidad->id_mensualidad?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
        <div class="form-row"> 
          <div class="col-8">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="id_mensualidad" required>
            <label for="validationCustom01">Mensualidad</label>
          </div>

          <div class="col-4">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="id_alumno" required>
            <label for="validationCustom03">Alumno</label>
          </div>
        </div>

        <div class="form-row">
        <div class="col-8 mx-auto">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="fecha_pago" required>          
            <label for="validationCustom02">Fecha Pago</label>
          </div>
        </div>

        
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  
      </div>
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-success mx-auto" value="Actualizar Tutor">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

  <?php

  }

  ?>