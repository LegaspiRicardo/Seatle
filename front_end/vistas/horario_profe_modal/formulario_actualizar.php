
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $horario_profe=new Horario_profe();
  if(isset($_GET['id_horario_profe']) && isset($_GET['editar'])){
    $horario_profe->id_horario_profe=$_GET['id_horario_profe'];
    $horario_profesores=$horario_profe->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal8").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Actualizar Horario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../back_end/controladores/horario_profe_controlador.php" method="GET" enctype="multipart/form-data">

          <input type="hidden" name="opcion" value="2">
          <input type="hidden" name="id_horario_profe" value="<?php echo $horario_profe->id_horario_profe?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
         
  <div class="form-row "> 

<div class="col mx-auto" >

      <select id="validationCustom01" class="form-control" name="id_profesor"  hidden>
      <option  value="<?php echo $horario_profe->id_profesor ?>"> <?php echo $horario_profe->id_profesor?> </option> 

      </select> 
  </div>
  
</div>



<div class="form-row mb-3"> 

  <div class="col mx-auto">

      <label for="validationCustom07" >Profesor</label>
      <select id="validationCustom01"  class="form-control"  name="id_profesor"  required>

          <?php

            foreach($profesores as $horario_profe){
          ?>

<option value="<?php echo $horario_profe->id_profesor?>" <?php  echo ($profesor->id_profesor==$horario_profesores->id_profesor) ? "selected" : ""  ?> > <?php echo $horario_profe->nombres . " ". $horario_profe->apellidos ?></option>


          <?php
              }
          ?>

          </select> 
    </div>




    <div class="col mx-auto" >

    <label for="validationCustom02">Notas</label>
           <input type="text" class="form-control" id="validationCustom02" name="notas" value="<?php echo $horario_profesores->notas?>" required> 

      
  </div>


  </div>


          <br>
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  
      </div>
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-success mx-auto" value="Actualizar Horario">

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

  <?php

  }

  ?>