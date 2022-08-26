
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $mensualidad=new Mensualidad();
    $mensualidades=$mensualidad->leer_todo();
   
    ?>


    
<table class="table table-active table-striped">
  <thead>
    <tr>
      <th scope="col">id_mensualidad</th>
      <th scope="col">Alumno</th>
      <th scope="col">Tipo Clase</th>
      <th scope="col">Precio Clase</th>
      <th scope="col">Clases</th>
      <th scope="col">Total</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($mensualidades as $mensualidad){
      ?>
  <tr>
      <td><?php echo $mensualidad->id_mensualidad ?></td>
      <td><?php echo $mensualidad->id_alumno ?></td>
      <td><?php echo $mensualidad->tipo_clase ?></td>
      <td><?php echo $mensualidad->precio_clase ?></td>
      <td><?php echo $mensualidad->num_clases ?></td>
      <td><?php echo $mensualidad->total ?></td>

      

      <td> <a href="index.php?id_mensualidad=<?php echo $mensualidad->id_mensualidad ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id_mensualidad=<?php echo $mensualidad->id_mensualidad ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>