
<?php

if(isset($_GET['resultado'])){
  echo $_GET['resultado'];
  }
  
  
  $alumno=new Alumno();
  if(isset($_GET['id_alumno']) && isset($_GET['baja'])){
    $alumno->id_alumno=$_GET['id_alumno'];
    $alumno=$alumno->leer_id();

    
    
  
?>


<!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
  Actualizar producto
</button>    -->

<script>
$(document).ready(function(){
  $("#exampleModal13").modal('show');
});
</script>


<!----------- Styles----------------->
<link rel="stylesheet" href="../estilos.css">


<!-- Modal -->
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header cabecera_baja">
        <h3 class="modal-title mx-auto" id="exampleModalLabel">Baja Alumnos</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <form class="needs-validation" novalidate action="../../../back_end/controladores/alumno_controlador.php" method="GET" enctype="multipart/form-data">

          <input type="hidden" name="opcion" value="2">
          <input type="hidden" name="id_alumno" value="<?php echo $alumno->id_alumno?>">


   <!------------------------------------Img, Nombres, Sexo------------------------------------------>
   <div class="Subtitulo">
        <h4>Información personal</h4>
        </div>

        <div class="row mt-1">
          <div class="col-4  mt-3">  
            <img src="../../PNGs/usuario_masculino.png" alt="" id="img_modal">
            <input type="date" class="form-control mt-2 inputForm" id="validationCustom03" name="fecha_nac" value="<?php echo $alumno->fecha_nac?>" disabled> 
          </div>
        
          <div class="col-8 ml-auto pt-3">
            <div class="form-row"> 
              <div class="col">
                <input type="text" class="form-control inputForm" id="validationCustom01" name="nombres" value="<?php echo $alumno->nombres?>" disabled>
                <label for="validationCustom01">Nombre(s)</label>
              </div>

              <div class="col-3 styled-select black rounded ">
                <select name="sexo" class="form-control" value="<?php echo $alumno->id_sexo?>" disabled>
                    <option value="masculino"> Masculino</option>
                    <option value="femenino" >Femenino</option>
                </select>
                <label for="validationCustom02" class=" col borde_inferior">Sexo</label>
              </div>
            </div>

            <div class="form-row"> 
              <div class="col">
                <input type="text" class="form-control inputForm" id="validationCustom01" name="apellido_pat" value="<?php echo $alumno->apellido_pat?>" disabled>
                <label for="validationCustom01">Apellido Paterno</label>
              </div>

              <div class="col">
                <input type="text" class="form-control inputForm" id="validationCustom02" name="apellido_mat" value="<?php echo $alumno->apellido_mat?>" disabled>
                <label for="validationCustom02">Apellido Materno</label>
              </div>
            </div>

            <!------------------------------------Fecha Ingreso, Tutor------------------------------------------>
        <div class="form-row">
          <div class="col-6">
            <input type="date" name="fecha_ing"  value="<?php echo $alumno->fecha_ing?>" id="validationCustom01" class="form-control" disabled>
          </div>


            <div class="col-6 ml-auto">
          <input type="search" name="id_tutor" list="tutors" id="validationCustom01" class="form-control" value="<?php echo $alumno->id_tutor?>" disabled>
         
          <datalist   id="tutors" >
          <?php foreach($tutores as $tutor){ ?>
            <option value="<?php echo $tutor->id_tutor?>"> <?php echo $tutor->nombre  ?></option>
          <?php
              }
            ?>
            </datalist> 
            
          <label for="validationCustom07" >Tutor</label>
          <img src="../../PNGs/buscar.png" alt="Lupa de busqueda" id="img_busqueda">
        </div>
    </div>   
          </div>
        </div>
        
        
        <br>
        <!------------------------------------Domicilio------------------------------------------>
        <div class="Subtitulo ">
        <h4 >Domicilio</h4>
        <img src="../../PNGs/ubicacion.png" class="img_subtitulo" alt="">
        </div>
        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom01" name="calle" value="<?php echo $alumno->calle?>" disabled>
            <label for="validationCustom01">Calle</label>
          </div>

          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom02" name="numero" value="<?php echo $alumno->numero?>" disabled>
            <label for="validationCustom02">Numero</label>
          </div>
        </div>

        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="colonia" value="<?php echo $alumno->colonia?>" disabled>
            <label for="validationCustom03">Colonia</label>
          </div>
          
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="cp" value="<?php echo $alumno->cp?>" disabled>
            <label for="validationCustom03">Codigo Postal</label>
          </div>
        </div>

       <br>
       <br>
        <!------------------------------------Alberca Info------------------------------------------>
        <div class="Subtitulo ">
          <h4 >Alberca Info</h4>
          <img src="../../PNGs/tarjeta-de-identificacion.png" class="img_subtitulo" alt="">
        </div>
        <div class="form-row"> 
          <div class="col styled-select black rounded ">
                <select name="alberca" class="form-control" value="<?php echo $alumno->alberca?>" disabled>
                    <option value="Sta Tere" >Sta Tere</option>
                    <option value="Zapopan" >Zapopan</option>
                </select>
            <label for="validationCustom01" class=" col borde_inferior" >Alberca</label>
          </div>

          <div class="col styled-select black rounded ">
                <select name="tipo_clase" class="form-control" value="<?php echo $alumno->tipo_clase?>" disabled>
                    <option value="Particular" >Particular </option>
                    <option value="Grupal" >Grupal</option>
                    <option value="Mixto" >Mixto</option>
                </select>
              <label for="validationCustom02" class=" col borde_inferior">Tipo de clase</label>
          </div>
        </div>

        <div class="form-row"> 
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="nivel" value="<?php echo $alumno->nivel?>" disabled>
            <label for="validationCustom03">Nivel</label>
          </div>
          
          <div class="col">
            <input type="text" class="form-control inputForm" id="validationCustom03" name="comentarios" value="<?php echo $alumno->comentarios?>">
            <label for="validationCustom03">Comentarios</label>
          </div>
        </div>

        <div class="form-row">
        <div class="col-6 styled-select mx-auto black rounded ">
                <select name="status" class="form-control" value="<?php echo $alumno->status?>" >
                    <option value="Activo" >Activo </option>
                    <option value="Pausa" >Pausa</option>
                    <option value="Baja" Selected >Baja</option>
                </select>
              <label for="validationCustom02" class=" col borde_inferior">Estatus</label>
          </div>

        <br>
        </div>

      <br>

            <!-----------------------------------Modal footer------------------------------------------>

        <div class="modal-footer">
          <input type="submit" class=" col-8 btn btn-warning mx-auto" value="Dar de Baja ">
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