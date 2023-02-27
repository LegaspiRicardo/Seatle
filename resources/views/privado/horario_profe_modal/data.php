
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $horario_profe=new Horario_profe();
    $horario_profesores=$horario_profe->leer_todo();
   
    ?>


<style>

.table{
        width:90%;
        max-height:500px;
        overflow: scroll;
        border-collapse:collapse;
        border:1px solid #ddd;
        border-radius:3px;
      }


th{
  text-align:center;
  font-size:1em;
  color:white;
  text-shadow:1px 1px black;
  background-color:rgb(121, 172, 210, 0.8);
  
}

  td{
    text-align:center;
    border-bottom: 1px solid #dddd;
  }
  tr:hover {background-color: rgb(121, 172, 210, 0.4);}


.tableIcon{
  width:25%;
}

.th_small{
  width:10%;
}

    </style>
    
<table class="table table-active mx-auto">
  <thead>
    <tr>
      <th scope="col">id_horario</th>
      <th scope="col">Profesor</th>
      <th scope="col">Notas</th>
      <th scope="col" class="th_small">Editar</th>
      <th scope="col" class="th_small">Borrar</th>
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
              echo $prof->id_profesor."."." ".$prof->nombres." ".$prof->apellidos. " ";
        ?>
      </td>

      <td><?php echo $horario_profe->notas ?></td>

      <td><a href="index.php?id_horario_profe=<?php echo $horario_profe->id_horario_profe ?>&editar"><img src="../../PNGs/editar.png" class="tableIcon"> </a></td >
  
      <td><a href="index.php?id_horario_profe=<?php echo $horario_profe->id_horario_profe ?>&borrar"><img src="../../PNGs/delete.png" class="tableIcon"></a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>