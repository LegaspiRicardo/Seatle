
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

    


<table class="tabla table-active mx-auto">
  <thead>
    <tr>
      <th scope="col">id_alumno</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Calle</th>
      <th scope="col">Numero</th>
      <th scope="col">Colonia</th>
      <th scope="col">Codigo Postal</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha_ingreso</th>
      <th scope="col">Tutor</th>
      <th scope="col">Tipo Clase</th>
      <th scope="col">Nivel</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Alberca</th>
      <th scope="col">Estatus</th>      

      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($alumnos as $alumno){
      ?>
  <tr>
      <td><?php echo $alumno->id_alumno ?></td>
      <td><?php echo $alumno->nombres ?></td>
      <td><?php echo $alumno->apellido_pat ?></td>
      <td><?php echo $alumno->apellido_mat ?></td>
      <td><?php echo $alumno->calle ?></td>
      <td><?php echo $alumno->numero ?></td>
      <td><?php echo $alumno->colonia ?></td>
      <td><?php echo $alumno->cp ?></td>
      <td><?php echo $alumno->fecha_nac ?></td>
      <td><?php echo $alumno->sexo ?></td>
      <td><?php echo $alumno->fecha_ing ?></td>
      <td><?php echo $alumno->id_tutor ?></td>
      <td><?php echo $alumno->tipo_clase ?></td>
      <td><?php echo $alumno->nivel ?></td>
      <td><?php echo $alumno->comentarios ?></td>
      <td><?php echo $alumno->alberca ?></td>
      <td><?php echo $alumno->status ?></td>

      <td> <a href="index.php?id_alumno=<?php echo $alumno->id_alumno ?>&editar">Editar </a></td >
      

      <td><a href="index.php?id_alumno=<?php echo $alumno->id_alumno ?>&borrar">Borrar</a></td>
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>