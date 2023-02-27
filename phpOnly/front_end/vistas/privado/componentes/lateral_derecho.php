



  <div class="col-3 ml-2 d-md-block collapse">
    <section id="sidebarMenu" class="col d-md-block sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

          <li class="nav-item ">
            <input type="search" name="id_alumno" list="alumns" id="validationCustom01" class="form-control" placeholder="Asistencia"  required>
                
                <datalist   id="alumns" >
                <?php foreach($alumnos as $alumno){ ?>
                  <option value="<?php echo $alumno->id_alumno?>"> <?php echo $alumno->nombres  ?></option>
                <?php
                    }
                  ?>
                  </datalist> 
                  
          </li>


          <li class="nav-item">
            <h5><a class="nav-link" href="../mensualidad_modal/index.php"><img src="../../PNGs/monedas.png" alt="" class="icon-sideBar mr-3"> Pagos</a></h5>
          </li>



        </ul>

       
</section>