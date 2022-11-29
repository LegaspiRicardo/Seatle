

<?php

 //echo $_GET['resultado'];





?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info btn_tutor" data-toggle="modal" data-target="#exampleModal20">
Registrar tutor
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!----------- Styles----------------->
<link rel="stylesheet" href="../estilos.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Registro de Tutor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
      <form class="needs-validation" novalidate action="../../../../back_end/controladores/tutor_controlador.php" method="POST"  >

        <input type="hidden" name="opcion" value="1">

        <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
        <div class="form-row"> 
          <div class="col-8">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="nombre" required>
            <label for="validationCustom01">Nombre(s)</label>
          </div>

          <div class="col-4">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="telefono" required>
            <label for="validationCustom03">Telefono</label>
          </div>
        </div>

        <div class="form-row">
        <div class="col-8 mx-auto">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="correo" required>          
            <label for="validationCustom02">Correo</label>
          </div>
        </div>

    </div>

      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn_tutor mx-auto" value="Registrar Tutor">
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