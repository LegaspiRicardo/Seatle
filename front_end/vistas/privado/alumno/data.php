
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $alumno=new Alumno();
    $alumnos=$alumno->leer_todo();

    ?>


    <style>

.table{
        width:70%;
        max-height:600px;
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
    text-align:left;
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
      <th scope="col">Alumno</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Ingresó</th>
      <th scope="col">Nivel</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Alberca</th>
      <th scope="col">Estatus</th> 
      
      <th scope="col">Editar </th>
      <th scope="col">Baja</th> 
      <th scope="col">Borrar</th>    

    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($alumnos as $alumno){
      ?>
  <tr>
      <td class="col-3">
          <span><?php echo $alumno->nombres . " " . $alumno->apellido_pat . " " . $alumno->apellido_mat?> </span>
          <span><?php echo $alumno->id_alumno ?></span>
          <br>
          <span><?php echo $alumno->fecha_nac ?></span>
      </td>


      <td class="col-3">
          <span><?php echo $alumno->calle . " ". "#" . $alumno->numero ?> </span>
          <br>
          <span><?php echo "Colonia:". " ". $alumno->colonia ?></span>
          <br>
          <span><?php echo "CP:". " ". $alumno->cp ?></span>
      </td>

      <td class="col-2"><?php echo $alumno->fecha_ing ?></td>
      <td><?php echo $alumno->nivel ?></td>
      <td><?php echo $alumno->comentarios ?></td>
      <td><?php echo $alumno->alberca ?></td>
      <td><?php echo $alumno->status ?></td>
      <td> <a href="index.php?id_alumno=<?php echo $alumno->id_alumno ?>&editar"><img src="../../../PNGs/editar.png" class="tableIcon">  </a></td >

      <td><a href="index.php?id_alumno=<?php echo $alumno->id_alumno ?>&baja"><img src="../../../PNGs/human-error.png" class="tableIcon1"></a></td>
      <td><a href="index.php?id_alumno=<?php echo $alumno->id_alumno ?>&borrar"><img src="../../../PNGs/delete.png" class="tableIcon"></a></td>


  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>