
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
        width:40%;
        max-height:500px;
        overflow: scroll;
        border-collapse:collapse;
        border:1px solid #ddd;
        border-radius:3%;
        background-color:white;
      }


th{
  text-align:center;
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
  width:25%;
}

.tableIcon1{
  width:35%;
}

.th_small{
  width:10%;
}

    </style>
    
<table class="table-active ">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Contacto</th>
      <th scope="col" class="th_small">Editar</th>
      <th scope="col" class="th_small">Borrar</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($tutores as $tutor){
      ?>
  <tr>
      <td><?php echo $tutor->nombre ?></td>
      <td>
        <span><?php echo $tutor->correo ?></span>
        <br>
        <span><?php echo "Tel. ". $tutor->telefono ?></span>
      </td>
      
      <td> <a href="index.php?id_tutor=<?php echo $tutor->id_tutor ?>&editar"><img src="../../../PNGs/editar.png" class="tableIcon"> </a></td >

      <td><a href="index.php?id_tutor=<?php echo $tutor->id_tutor ?>&borrar"><img src="../../../PNGs/delete.png" class="tableIcon"></a></td>
      
  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>