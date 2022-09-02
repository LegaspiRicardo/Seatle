
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $alumno_paga_mensualidad=new Alumno_paga_mensualidad();
    $alumno_paga_mensualidades=$alumno_paga_mensualidad->leer_todo();
   
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

.tableIcon1{
  width:5%;
}

.th_small{
  width:10%;
}

    </style>
    
<table class="table table-active mx-auto">
  <thead>
    <tr>
      <th scope="col">Id_Mensualidad</th>
      <th scope="col">Alumno</th>
      <th scope="col">Fecha Pago</th>
      <th scope="col" class="th_small">Editar</th>
      <th scope="col" class="th_small">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($alumno_paga_mensualidades as $alumno_paga_mensualidad){
      ?>
  <tr>
      <td><?php echo $alumno_paga_mensualidad->id_mensualidad ?></td>
      <td><?php echo $alumno_paga_mensualidad->id_alumno ?></td>
      <td><?php echo $alumno_paga_mensualidad->fecha_pago ?></td>
      
      <td> <a href="index.php?id_mensualidad=<?php echo $alumno_paga_mensualidad->id_mensualidad ?>&editar"><img src="../../PNGs/editar.png" class="tableIcon"> </a></td >

      <td><a href="index.php?id_mensualidad=<?php echo $alumno_paga_mensualidad->id_mensualidad ?>&borrar"><img src="../../PNGs/delete.png" class="tableIcon"></a></td>
      
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>