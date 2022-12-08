
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  

  $profesor=new Profesor();
  if(isset($_GET['id_profesor']) && isset($_GET['editar'])){
    $profesor->id_profesor=$_GET['id_profesor'];
    $profesor=$profesor->leer_id();
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal14").modal('show');
});
</script>

<style>
  .labels{
          font-family:Sans-serif;
        }
</style>

<!-- Modal -->
<div class="modal fade " id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content pl-2 pr-2">

      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Editar Profesor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../../back_end/controladores/profesor_controlador.php" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="opcion" value="2">
          <input type="hidden" name="id_profesor" value="<?php echo $profesor->id_profesor?>">


  <!-------------Campos del formulario------------------------------------------>


    <div class="Subtitulo">
      <h4>Información personal</h4>
    </div>

      <div class="row mt-1">
          <div class="col-4  mt-3">  
            <img src="../../../PNGs/usuario_masculino.png" alt="" id="img_modal">
            <input type="date" class="form-control inputForm" id="validationCustom01" name="fecha_nac" value="<?php echo $profesor->fecha_nac?>" required> 
            <label for="validationCustom01" class="labels"> Fecha nacimiento</label>
          </div>
          
        <div class="col-8 ml-auto pt-3">
          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom02" name="nombres" value="<?php echo $profesor->nombres?>" required>
              <label for="validationCustom02" class="labels" > Nombre(s) </label>
            </div>

            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom03" name="apellidos" value="<?php echo $profesor->apellidos?>" required>
              <label for="validationCustom03" class="labels" > Apellidos </label>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom04" name="telefono" value="<?php echo $profesor->telefono?>" required>
              <label for="validationCustom04" class="labels"> Telefono </label>
            </div>

            <div class="col-3 ">
              <input type="color" class="form-control inputForm colorPicker " id="validationCustom05" value="<?php echo $profesor->color?>" name="color">
              <label for="validationCustom05" class="labels"> Color </label>
              <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda_profe">
            </div>
          </div>

          <!------------------------------------Fecha ingreso hidden------------------------------------------>
          <div class="form-row">
            <div class="col-6 mx-auto">
              <input type="date" name="fecha_ing"  value="<?php echo date("Y-m-d");?>" id="validationCustom06" class="form-control inputForm" value="<?php echo $profesor->fecha_ing?>">
              <label for="validationCustom06" class="labels"> Fecha ingreso</label>
            </div>
          </div>

        </div> 
      </div>          
        <!------------------------------------Alberca Info------------------------------------------>
     
        <div class="Subtitulo mt-3">
          <h4 >Alberca Info</h4>
          <img src="../../../PNGs/tarjeta-de-identificacion.png" class="img_subtitulo" alt="">
        </div>

      <div class="row mt-1">
          <div class="col-6 styled-select black rounded ">
            <select name="alberca" class="form-control" value="<?php echo $profesor->alberca?>" >
            <option value="<?php echo $profesor->alberca?>" hidden><?php echo $profesor->alberca?></option>
                <option value="Sta Tere" >Sta Tere</option>
                <option value="Zapopan" >Zapopan</option>
            </select>
              <label for="validationCustom07" class=" col borde_inferior labels" > Alberca </label>
          </div>


          <div class="col-6 styled-select mx-auto black rounded ">
            <select name="status" class="form-control" value="<?php echo $profesor->status?>">
              <option value="<?php echo $profesor->status?>" hidden><?php echo $profesor->status?></option>
              <option value="Activo" >Activo </option>
              <option value="Baja" >Baja</option>
            </select>

              <label for="validationCustom08" class=" col borde_inferior labels"> Estatus </label>
          </div>


          <div class="col-6">
            <input type="text" class="form-control inputForm" id="validationCustom09" name="sueldo" value="<?php echo $profesor->sueldo?>" required>
            <label for="validationCustom09" class="labels"> Sueldo </label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom10" name="comentarios" value="<?php echo $profesor->comentarios?>">
            <label for="validationCustom10" class="labels"> Comentarios </label>
          </div>


      </div>       


 
        <div class="Subtitulo mt-3 mb-3">
          <h4 >Sección privada</h4>
        </div>


        <div class="row mb-4">
          <div class="col-6">
            <select name="puesto" class="form-control" value="<?php echo $profesor->puesto?>">
                <option value="<?php echo $profesor->puesto?>" hidden><?php echo $profesor->puesto?></option>
                <option value="Profesor" >Profesor </option>
                <option value="Admin" >Admin</option>
            </select>
            <label for="validationCustom11" class="labels mb-0 col-10 mx-auto  ">Puesto</label>
          </div>

          <div class="col-6">
            <div class="col-12 mx-auto">
              <input type="password" class="form-control inputForm text-center" id="validationCustom12" name="contrasena" value="<?php echo $profesor->contrasena?>" required >
            </div>
            <input type="password" class="form-control inputForm" id="validationCustom03" name="contrasena1" value="<?php echo $profesor->contrasena1?>" hidden>
            <label for="validationCustom12" class="labels mb-0 col-10 ml-auto ">Contraseña</label>
          </div>

      </div>

        



        
  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  
      <div class="modal-footer">
      <input type="submit" class="col-8 btn-actualizar mx-auto pt-1 pb-1" value="Actualizar Profesor">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>

      </form>


    </div>
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