
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $profesor=new Profesor();
    $profesores=$profesor->leer_todo();
   
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
  text-align:left;
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

    </style>
    
<table class="table table-active">
  <thead>
    <tr>
      <th scope="col">id_Profesor</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col">Alberca</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Comentarios</th>
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
      <td><?php echo $profesor->fecha_nac ?></td>
      <td><?php echo $profesor->fecha_ing ?></td>
      <td><?php echo $profesor->alberca ?></td>
      <td><?php echo $profesor->sueldo ?></td>
      <td><?php echo $profesor->status ?></td>
      <td><?php echo $profesor->comentarios ?></td>

      

      <td> <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>