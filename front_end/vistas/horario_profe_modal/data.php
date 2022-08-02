
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $horario_profe=new Horario_profe();
    $horario_profesores=$horario_profe->leer_todo();
   
    ?>


    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id_horario</th>
      <th scope="col">Profesor</th>
      <th scope="col">Notas</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($horario_profesores as $horario_profe){
      ?>
  <tr>
      <td><?php echo $horario_profe->id_horario_profe ?></td>

      <td><?php $profesor=new Profesor();
              $profesor->id_profesor=$horario_profe->id_profesor;
              $prof=$profesor->leer_id();
              echo $prof->id_profesor." ".$prof->nombres." ".$prof->apellidos. " ";
        ?>
      </td>





      <td><?php echo $horario_profe->notas ?></td>

      

      <td><a href="index.php?id_horario_profe=<?php echo $horario_profe->id_horario_profe ?>&editar">Editar </a></td >
  
      <td><a href="index.php?id_horario_profe=<?php echo $horario_profe->id_horario_profe ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>