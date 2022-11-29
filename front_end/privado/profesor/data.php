
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
        width:60%;
        max-height:550px;
        overflow: scroll;
        border-collapse:collapse;
        border:1px solid #ddd;
        border-radius:3%;
        background-color:white;
      }


th{
  text-align:left;
  font-size:1em;
  color:white;
  text-shadow:1px 1px black;
  background-color:rgb(121, 172, 210);
  position:sticky;
  top:0;
  
}

  td{
    text-align:center;
    border-bottom: 1px solid #dddd;
    font-size:13px;
  }
  tr:hover {background-color: rgb(121, 172, 210, 0.4);}

  .tableIcon{
  width:35%;
}

.tableIcon1{
  width:40%;
}

    </style>
    
<table class="table-active">
  <thead>
    <tr>
      <th scope="col">Profesor</th>
      <th scope="col">Telefono</th>
      <th scope="col">Alberca</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Editar</th>
      <th scope="col">Baja</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($profesores as $profesor){
      ?>
  <tr>
      <td class="col-3">
          <span><?php echo $profesor->nombres . " " . $profesor->apellidos ?> </span>
          <br>
          <span><?php echo $profesor->fecha_nac ?></span>
          <br>
      </td>
      <td><?php echo $profesor->telefono ?></td>
      <td><?php echo $profesor->alberca ?></td>
      <td><?php echo $profesor->sueldo ?></td>
      <td><?php echo $profesor->status ?></td>
      <td><?php echo $profesor->comentarios ?></td>
      <td> <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&editar"><img src="../../../PNGs/editar.png" class="tableIcon">  </a></td>
      <td> <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&baja"><img src="../../../PNGs/human-error.png" class="tableIcon1">  </a></td>
      <td> <a href="index.php?id_profesor=<?php echo $profesor->id_profesor ?>&borrar"><img src="../../../PNGs/delete.png" class="tableIcon">  </a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>