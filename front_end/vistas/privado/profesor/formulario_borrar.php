
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
  $("#exampleModal16").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header  cabecera_eliminar">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Eliminar Profesor</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../back_end/controladores/profesor_controlador.php" method="GET" enctype="multipart/form-data">


        <input type="hidden" name="opcion" value="3">
          <input type="hidden" name="id_profesor" value="<?php echo $profesor->id_profesor?>">


 <!------------------------------------Campos del formulario------------------------------------------>
 

 <div class="Subtitulo">
        <h4>Información personal</h4>
       </div>

      <div class="row mt-1">
          <div class="col-4  mt-3">  
            <img src="../../PNGs/usuario_masculino.png" alt="" id="img_modal">
            <input type="date" class="form-control inputForm" id="validationCustom03" name="fecha_nac" value="<?php echo $profesor->fecha_nac?>" disabled> 
            <label for="validationCustom03" class="labels"> Fecha nacimiento</label>
          </div>
          
        <div class="col-8 ml-auto pt-3">
          <div class="form-row"> 
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom01" name="nombres" value="<?php echo $profesor->nombres?>" disabled>
              <label for="validationCustom01" class="labels" > Nombre(s) </label>
            </div>

            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom02" name="apellidos" value="<?php echo $profesor->apellidos?>" disabled>
              <label for="validationCustom02" class="labels" > Apellidos </label>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control inputForm" id="validationCustom03" name="telefono" value="<?php echo $profesor->telefono?>" disabled>
              <label for="validationCustom03" class="labels"> Telefono </label>
            </div>

            <div class="col-3 ">
              <input type="color" class="form-control inputForm colorPicker " id="validationCustom03" value="<?php echo $profesor->color?>" name="color" disabled>
              <label for="validationCustom03" class="labels"> Color </label>
              <img src="../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda_profe">
            </div>
          </div>

          <!------------------------------------Fecha ingreso hidden------------------------------------------>
          <div class="form-row">
            <div class="col-6 mx-auto">
              <input type="date" name="fecha_ing"  value="<?php echo date("Y-m-d");?>" id="validationCustom01" class="form-control inputForm" value="<?php echo $profesor->fecha_ing?>" disabled>
              <label for="validationCustom03" class="labels"> Fecha ingreso</label>
            </div>
          </div>

        </div> 
      </div>          
        <!------------------------------------Alberca Info------------------------------------------>
     
        <div class="Subtitulo mt-3">
          <h4 >Alberca Info</h4>
          <img src="../../PNGs/tarjeta-de-identificacion.png" class="img_subtitulo" alt="">
        </div>

      <div class="row mt-1">
          <div class="col-6 styled-select black rounded ">
            <select name="alberca" class="form-control" value="<?php echo $profesor->alberca?>" disabled>
                <option value="Sta Tere" >Sta Tere</option>
                <option value="Zapopan" >Zapopan</option>
                <option value="<?php echo $profesor->alberca?>"selected><?php echo $profesor->alberca?></option>
            </select>
              <label for="validationCustom01" class=" col borde_inferior labels" > Alberca </label>
          </div>


          <div class="col-6 styled-select mx-auto black rounded ">
            <select name="status" class="form-control" value="<?php echo $profesor->status?>" disabled>
                <option value="Activo" >Activo </option>
                <option value="Baja" >Baja</option>
                <option value="<?php echo $profesor->status?>"selected><?php echo $profesor->status?></option>
            </select>
              <label for="validationCustom02" class=" col borde_inferior labels"> Estatus </label>
          </div>
        </div>       


        <div class="row">
          <div class="col-6">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="sueldo" value="<?php echo $profesor->sueldo?>" disabled>
            <label for="validationCustom01" class="labels"> Sueldo </label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="comentarios" value="<?php echo $profesor->comentarios?>" >
            <label for="validationCustom03" class="labels"> Comentarios </label>
          </div>
        </div>
 
        </div>


  <!---- <button class="btn btn-primary" type="submit">Submit form</button>------->
  
      <div class="modal-footer">
      <input type="submit" class="col-8 btn btn-danger mx-auto" value="Eliminar Profesor">

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

  <?php

  }

  ?>