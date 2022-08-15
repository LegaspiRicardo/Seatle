<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal4">
Registrar Profesor
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="../estilos.css">

<style>
  .labels{
          font-family:Sans-serif;
        }
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
      <h3 class="modal-title ml-auto" id="exampleModalLabel">Registro Profesores</h3>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

   <div class="modal-body">
     <form class="needs-validation" novalidate action="../../../back_end/controladores/profesor_controlador.php" method="POST" enctype="multipart/form-data" >

       <input type="hidden" name="opcion" value="1">
       <!------------------------------------Informacion personal------------------------------------------>
       <div class="Subtitulo">
        <h4>Información personal</h4>
       </div>

      <div class="row mt-1">
          <div class="col-4  mt-3">  
            <img src="usuario_masculino.png" alt="" id="img_modal">
            <input type="date" class="form-control inputForm" id="validationCustom03" name="fecha_nac" required> 
            <label for="validationCustom01" class="labels">Fecha Nacimiento</label>
          </div>
          
        <div class="col-8 ml-auto pt-3">
          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom01" name="nombres" required>
              <label for="validationCustom01" class="labels">Nombre(s)</label>
            </div>

            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom02" name="apellidos" required>
              <label for="validationCustom02" class="labels">Apellidos</label>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom03" name="telefono" required>
              <label for="validationCustom03" class="labels">Telefono</label>
            </div>

            <div class="col-3 ">
              <input type="color" class="form-control inputForm colorPicker " id="validationCustom03" name="color">
              <label for="validationCustom03" class="labels">Color</label>
              <img src="buscar.png" alt="Lupa de busqueda" id="img_busqueda_profe">
            </div>
          </div>

          <!------------------------------------Fecha ingreso hidden------------------------------------------>
          <div class="form-row">
            <div class="col-6 mx-auto">
              <input type="date" name="fecha_ing"  value="<?php echo date("Y-m-d");?>" id="validationCustom01" class="form-control inputForm" hidden>
            </div>
          </div>

        </div> 
      </div>          
        <!------------------------------------Alberca Info------------------------------------------>
     
        <div class="Subtitulo mt-3">
          <h4 >Alberca Info</h4>
          <img src="tarjeta-de-identificacion.png" class="img_subtitulo" alt="">
        </div>

      <div class="row mt-1">
          <div class="col-6 styled-select black rounded ">
            <select name="alberca" class="form-control" >
                <option value="Sta Tere" >Sta Tere</option>
                <option value="Zapopan" >Zapopan</option>
                <option value=" " selected hidden> </option>
            </select>
              <label for="validationCustom01" class=" col borde_inferior labels" >Alberca</label>
          </div>


          <div class="col-6 styled-select mx-auto black rounded ">
            <select name="status" class="form-control" >
                <option value="Activo" >Activo </option>
                <option value="Baja" >Baja</option>
                <option value=" " selected hidden> </option>
            </select>
              <label for="validationCustom02" class=" col borde_inferior labels">Estatus</label>
          </div>
        </div>       


        <div class="row">
          <div class="col-6">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="sueldo" required>
            <label for="validationCustom01" class="labels">Sueldo</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="comentarios">
            <label for="validationCustom03" class="labels">Comentarios</label>
          </div>
        </div>
 
        </div>
       <br>
      <!------------------------------------Modal footer------------------------------------------>
      <div class="modal-footer">
        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Registrar Profesor">
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