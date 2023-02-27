

<?php

 //echo $_GET['resultado'];




?>

<button type="button" class="btn  btn_tutor" data-toggle="modal" data-target="#exampleModal7">
Registrar Pago
</button>


<link rel="stylesheet" href="../estilos.css">

<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
      <h3 class="modal-title ml-auto" id="exampleModalLabel">Registrar fecha pago</h3>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

   <div class="modal-body">

      <form class="needs-validation" novalidate action="../../../back_end/controladores/alumno_paga_mensualidad_controlador.php" method="POST" enctype="multipart/form-data" hidden>

        <input type="hidden" name="opcion" value="1">

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
            <input type="text" class="form-control inputForm" id="validationCustom02" name="fecha_pago" value="<?php echo date("Y-m-d");?>"required>          
            <label for="validationCustom02">Fecha Pago</label>
          </div>
        </div>



        <br>
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Profesor">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>

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