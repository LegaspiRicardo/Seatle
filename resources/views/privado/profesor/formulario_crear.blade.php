<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<button type="button" class="btn  btn_tutor_mas" data-toggle="modal" data-target="#exampleModal17">
+
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">

<style>
  .labels{
          font-family:Sans-serif;
        }
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content pl-2 pr-2">
    <div class="modal-header">
      <h3 class="modal-title ml-auto" id="exampleModalLabel">Registro Profesores</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <div class="modal-body">
    <form class="needs-validation" novalidate action="/profesores" method="POST" enctype="multipart/form-data" >
    @csrf

      <!------------------------------------Informacion personal------------------------------------------>
      <div class="Subtitulo text-left">
        <h4>Información personal</h4>
      </div>

      <div class="row mt-1">
          <div class="col-4  mt-3">  
            <img src="../../../PNGs/usuario_masculino.png" alt="" class="img_modal">
            <input type="date" class="form-control inputForm" id="validationCustom01" name="fecha_nac" required> 
            <label for="validationCustom01" class="labels">Fecha Nacimiento</label>
          </div>
          
        <div class="col-8 ml-auto pt-3">
          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom02" name="nombres" required>
              <label for="validationCustom02" class="labels">Nombre(s)</label>
            </div>

            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom03" name="apellidos" required>
              <label for="validationCustom03" class="labels">Apellidos</label>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom04" name="telefono" required>
              <label for="validationCustom04" class="labels">Telefono</label>
            </div>

            <div class="col-3 ">
              <input type="color" class="form-control inputForm colorPicker " id="validationCustom05" name="color">
              <label for="validationCustom05" class="labels">Color</label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" class="icono_modal">
            </div>
          </div>

          <!------------------------------------Fecha ingreso hidden------------------------------------------>
          <div class="form-row">
            <div class="col-6 mx-auto">
              <input type="date" name="fecha_ing"  value="<?php echo date("Y-m-d");?>" id="validationCustom06" class="form-control inputForm" hidden>
            </div>
          </div>

        </div> 
      </div>          
        <!------------------------------------Alberca Info------------------------------------------>
    
        <div class="Subtitulo mt-3 text-left">
          <h4 >Alberca Info</h4>
          <img src="../../../PNGs/tarjeta-de-identificacion.png" class="icono_subtitulo" alt="">
        </div>

      <div class="row mt-1">
          <div class="col-6 styled-select black rounded ">
            <select name="alberca" class="form-control" >
                <option value="Sta Tere" >Sta Tere</option>
                <option value="Zapopan" >Zapopan</option>
                <option value=" " selected hidden> </option>
            </select>
              <label for="validationCustom07" class=" col borde_inferior labels" >Alberca</label>
          </div>


          <div class="col-6 styled-select mx-auto black rounded ">
            <select name="status" class="form-control" >
                <option value="Activo" >Activo </option>
                <option value="Baja" >Baja</option>
                <option value=" " selected hidden> </option>
            </select>
              <label for="validationCustom08" class=" col borde_inferior labels">Estatus</label>
          </div>
        </div>       


        <div class="row">
          <div class="col-6">
            <input type="text" class="form-control inputForm" id="validationCustom09" name="sueldo" required>
            <label for="validationCustom09" class="labels">Sueldo</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom10" name="comentarios">
            <label for="validationCustom10" class="labels">Comentarios</label>
          </div>
        </div>



<br>


        <div class="Subtitulo mt-3 mb-3 text-left">
          <h4 >Sección privada</h4>
        </div>



        <div class="row">
        <label for="validationCustom11" class="labels mb-3 col-10 mx-auto text-center">Exclusiva del sistema</label>

          <div class="col-6">
            <input type="password" class="form-control inputForm" id="validationCustom12" name="contrasena" placeholder="Ingrese contraseña" required >

          </div>

          <div class="col">
            <input type="password" class="form-control inputForm" id="validationCustom13" name="contrasena1" placeholder="Confirmar contraseña" required>
          </div>
        </div>

        </div>
        
        <br>

        <input type="hidden" name="puesto" value="Profesor">
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