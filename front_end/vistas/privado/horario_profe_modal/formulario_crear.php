

<?php

//echo $_GET['resultado'];

$profesor=new Profesor();
$profesores=$profesor->leer_todo();



?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal10">
Asignar Horario
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
      <h5 class="modal-title mx-auto" id="exampleModalLabel">Horario profesores</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

   <div class="modal-body">
     <form class="needs-validation" novalidate action="../../../back_end/controladores/horario_profe_controlador.php" method="POST" enctype="multipart/form-data" >

       <input type="hidden" name="opcion" value="1">

       <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
       <div class="form-row"> 


         <div class="col mx-auto">
          <label for="validationCustom07" >Profesor</label>
          <select id="validationCustom01" class="form-control"  name="id_profesor" required>
          <?php foreach($profesores as $profesor){ ?>
            <option value="<?php echo $profesor->id_profesor?>"> <?php echo $profesor->nombres . " ". $profesor->apellidos ?></option>
          <?php
              }
            ?>

          </select> 
        </div>



         <div class="col">
           <label for="validationCustom02">Notas</label>
           <input type="text" class="form-control" id="validationCustom02" name="notas" required>
         </div>

       </div>

       <br>
   </div>

     <div class="modal-footer">
       <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Asignar horario">
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