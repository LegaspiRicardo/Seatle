
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $clase_part=new Clase_part();
    
    $clases_part=$clase_part->tabla();
    ?>

<style>

.table{
        max-height:350px;
        overflow: scroll;
        border:1px solid #ddd;
        border-radius:3%;
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
    background-color: white;
  }
  tr:hover {background-color: rgb(121, 172, 210, 0.4);}


.tableIcon{
  width:30%;
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
      <th scope="col">Alumno</th>
      <th scope="col">Profesor</th>
      <th scope="col">Inicio</th>
      <th scope="col">Fin</th>
      <th scope="col">Color</th>
    </tr>
  </thead>
  <tbody>
    
      <?php
      foreach($clases_part as $clase_part){
      ?>
  <tr>
      <td><?php echo $clase_part->nombres ." ". $clase_part->apellido_pat  ?> </td>
      <td>
        <span><?php echo $clase_part->profe ?></span>
      </td>
      <td>
        <span><?php echo "Inicio. ". $clase_part->inicio ?></span>
      </td>

      <td>

      <span><?php echo "Fin. ". $clase_part->fin ?></span>
      </td>
      

  </tr>
  
  <?php 
  }
  ?>
  </tbody>
</table>