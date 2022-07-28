
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $profesor=new Profesor();
    $profesores=$profesor->leer_todo();
   
    ?>


    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id_Profesor</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($profesores as $profesor){
      ?>
  <tr>
      <td><?php echo $profesor->id_profesor ?></td>
      <td><?php echo $profesor->nombres ?></td>
      <td><?php echo $profesor->apellidos ?></td>
      <td><?php echo $profesor->telefono ?></td>
      <td><?php echo $profesor->sueldo ?></td>
      <td><?php echo $profesor->status ?></td>

      

      <td> <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>