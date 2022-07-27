
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $tutor=new Tutor();
    $tutores=$tutor->leer_todo();
   
    ?>


    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id_tutor</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($tutores as $tutor){
      ?>
  <tr>
      <td><?php echo $tutor->id_tutor ?></td>
      <td><?php echo $tutor->nombre ?></td>
      <td><?php echo $tutor->correo ?></td>
      <td><?php echo $tutor->telefono ?></td>

      

      <td> <a href="index.php?id=<?php echo $tutor->id_tutor ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id=<?php echo $tutor->id_tutor ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>