

<?php

 //echo $_GET['resultado'];





?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal10">
Registrar Alumno
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
       <h5 class="modal-title mx-auto" id="exampleModalLabel">Registrar en Alumnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
      <form class="needs-validation" novalidate action="../../../back_end/controladores/alumno_controlador.php" method="POST" enctype="multipart/form-data" >

        <input type="hidden" name="opcion" value="1">

        <!------------------------------------Nombres, Apellidos------------------------------------------>
        <div class="form-row"> 
          <div class="col">
            <label for="validationCustom01">Nombre(s)</label>
            <input type="text" class="form-control" id="validationCustom01" name="nombres" required>
          </div>

          <div class="col">
            <label for="validationCustom02">Apellido Paterno</label>
            <input type="text" class="form-control" id="validationCustom02" name="apellido_pat" required>
          </div>

          <div class="col">
            <label for="validationCustom03">Apellido Materno</label>
            <input type="text" class="form-control" id="validationCustom03" name="apellido_mat" required>
          </div>
        </div>

     <!------------------------------------Domicilio------------------------------------------>
   

        <div class="form-row"> 
          <div class="col">
            <label for="validationCustom01">Calle</label>
            <input type="text" class="form-control" id="validationCustom01" name="calle" required>
          </div>

          <div class="col">
            <label for="validationCustom02">Numero</label>
            <input type="text" class="form-control" id="validationCustom02" name="numero" required>
          </div>
        </div>

        <div class="form-row"> 
          <div class="col">
            <label for="validationCustom03">Colonia</label>
            <input type="text" class="form-control" id="validationCustom03" name="colonia" required>
          </div>
          
          <div class="col">
            <label for="validationCustom03">Codigo Postal</label>
            <input type="text" class="form-control" id="validationCustom03" name="cp" required>
          </div>
        </div>

        <br>
    </div>

      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Tutor">
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


</body>
</html>