<?php

if(isset($_GET['resultado'])){
  echo $resultado=$_GET['resultado'];
  }
  

  $tutor=new Tutor();
  if(isset($_GET['id_tutor'])&& isset($_GET['borrar'])){
    $tutor->id_tutor=$_GET['id_tutor'];
    $tutor=$tutor->leer_id();
  
?>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
  Eliminar Producto
</button>  -->

<script>
$(document).ready(function(){
  $("#exampleModal3").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Eliminar Tutor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form class="needs-validation" novalidate action="../../../back_end/controladores/tutor_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id_tutor" value="<?php echo $tutor->id_tutor?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
    <div class="form-row"> 
      <div class="col">
        <label for="validationCustom01">Nombre</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" value="<?php echo $tutor->nombre?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom02">Correo</label>
        <input type="text" class="form-control" id="validationCustom02" name="correo" value="<?php echo $tutor->correo?>" disabled>
      </div>

      <div class="col">
        <label for="validationCustom03">Telefono</label>
        <input type="text" class="form-control" id="validationCustom02" name="telefono" value="<?php echo $tutor->telefono?>" disabled>
      </div>
    </div>

        
      </div>
      <div class="modal-footer">
      <input type="submit" class=" col-8 btn btn-danger mx-auto" value="Eliminar Tutor">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


<?php  


  }
?>