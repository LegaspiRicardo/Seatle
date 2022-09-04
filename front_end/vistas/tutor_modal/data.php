
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $tutor=new Tutor();
    $tutores=$tutor->leer_todo();
   
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
  position:sticky;
  top:0;
  
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
    
<table class="table table-active ">
  <thead>
    <tr>
      <th scope="col">Id_Tutor</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col" class="th_small">Editar</th>
      <th scope="col" class="th_small">Borrar</th>
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
      
      <td> <a href="index.php?id_tutor=<?php echo $tutor->id_tutor ?>&editar"><img src="../../PNGs/editar.png" class="tableIcon"> </a></td >

      <td><a href="index.php?id_tutor=<?php echo $tutor->id_tutor ?>&borrar"><img src="../../PNGs/delete.png" class="tableIcon"></a></td>
      
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>