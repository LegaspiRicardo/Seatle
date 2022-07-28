
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $profesor=new Profesor();
  if(isset($_GET['id_profesor']) && isset($_GET['borrar'])){
    $profesor->id_profesor=$_GET['id_profesor'];
    $profesor=$profesor->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal6").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Eliminar Profesor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../back_end/controladores/profesor_controlador.php" method="GET" enctype="multipart/form-data">

          <input type="hidden" name="opcion" value="3">
          <input type="hidden" name="id_profesor" value="<?php echo $profesor->id_profesor?>">


 <!------------------------------------Campos del formulario------------------------------------------>
 <div class="form-row"> 
         <div class="col">
           <label for="validationCustom01">Nombre(s)</label>
           <input type="text" class="form-control" id="validationCustom01" name="nombres" value="<?php echo $profesor->nombres?>" disabled>
         </div>

         <div class="col">
           <label for="validationCustom02">Apellidos</label>
           <input type="text" class="form-control" id="validationCustom02" name="apellidos" value="<?php echo $profesor->apellidos?>" disabled>
         </div>

         <div class="col">
           <label for="validationCustom03">Telefono</label>
           <input type="text" class="form-control" id="validationCustom03" name="telefono" value="<?php echo $profesor->telefono?>" disabled>
         </div>
       </div>


        <div class="form-row">
          <div class="col">
            <label for="validationCustom01">Sueldo</label>
            <input type="text" class="form-control" id="validationCustom01" name="sueldo" value="<?php echo $profesor->sueldo?>" disabled>
          </div>

          <div class="col">
            <label for="validationCustom01">Estatus</label>
            <input type="text" class="form-control" id="validationCustom01" name="status" value="<?php echo $profesor->status?>" disabled>
          </div>

        </div>








          <br>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  
      </div>
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-danger mx-auto" value="Eliminar Profesor">

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