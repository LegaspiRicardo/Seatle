<?php

if(isset($_GET['resultado'])){
  echo $resultado=$_GET['resultado'];
  }
  

  $mensualidad=new Mensualidad();
  if(isset($_GET['id_mensualidad'])&& isset($_GET['borrar'])){
    $mensualidad->id_mensualidad=$_GET['id_mensualidad'];
    $mensualidad=$mensualidad->leer_id();
  
?>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
  Eliminar Producto
</button>  -->

<script>
$(document).ready(function(){
  $("#exampleModal12").modal('show');
});
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Eliminar Mensualidad</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form class="needs-validation" novalidate action="../../../back_end/controladores/mensualidad_controlador.php" method="GET">

  <input type="hidden" name="opcion" value="3">
  <input type="hidden" name="id_mensualidad" value="<?php echo $mensualidad->id_mensualidad?>">


  <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
  <div class="form-row mb-3">
          <div class="Subtitulo ">
        <h4 >Alumno</h4>
        <img src="../../PNGs/usuarios.png" class="img_subtitulo" alt="">
        </div> 
          <div class="col-8">
          <input type="search" name="id_alumno" list="Alumnos" id="validationCustom01"  class="form-control inputForm" value="<?php echo $mensualidad->id_alumno?>" disabled>
         
            <datalist   id="Alumnos"  >
            <?php foreach($alumnos as $alumno){ ?>
              <option value="<?php echo $alumno->id_alumno?> <?php echo $alumno->nombres . " " . $alumno->apellido_pat ." " . $alumno->apellido_mat ?>"> <?php echo $alumno->nombres . " " . $alumno->apellido_pat." " . $alumno->apellido_mat  ?></option>
            <?php
                }
              ?>
              
              </datalist> 
            <label for="validationCustom01">Nombre</label>
          </div>

          <div class="col-4">
                <select name="tipo_clase" class="form-control" value="<?php echo $mensualidad->tipo_clase?>" disabled>
                    <option value="particular"> Particular</option>
                    <option value="grupo" >Grupal</option>
                    <option value="mixto" >Mixto</option>
                    <option value="<?php echo $mensualidad->tipo_clase?>" selected ><?php echo $mensualidad->tipo_clase?> </option>
                </select>
            <label for="validationCustom03">Tipo de Clase</label>
          </div>
        </div>

        <div class="form-row">
        <div class="Subtitulo ">
          <h4 >Clases</h4>
          <img src="../../PNGs/tarjeta-de-identificacion.png" class="img_subtitulo" alt="">
        </div>

        <div class="col-6 mx-auto">
                <select name="num_clases" class="form-control inputForm" value="<?php echo $mensualidad->num_clases?>" disabled >
                    <option value="1" >1 x Semana</option>
                    <option value="2"> 2 x Semana</option>
                    <option value="3" >3 x Semana</option>
                    <option value="4" >4 x Semana</option>
                    <option value="5" >5 x Semana</option>
                    <option value="<?php echo $mensualidad->num_clases?>"selected><?php echo $mensualidad->num_clases . " " . "x Semana"?></option>
                </select> 
            <label for="validationCustom02">Clases por Semana</label>
          </div>

          <div class="col-6 mx-auto">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="precio_clase" value="<?php echo $mensualidad->precio_clase?>" disabled>          
            <label for="validationCustom02">Precio Mensual</label>
          </div>
        </div>

        <div class="form-row">
          <div class="col-4 mx-auto">
          <input type="text" class="form-control inputForm" id="validationCustom01" name="total" value="<?php echo $mensualidad->total?>" disabled>
                <label for="validationCustom01">Total</label>

          </div>


        </div>

    </div>
      <div class="modal-footer">
      <input type="submit" class=" col-8 btn btn-danger mx-auto" value="Eliminar Mensualidad">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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