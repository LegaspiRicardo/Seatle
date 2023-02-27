
    <?php
    if(isset($_GET['resultado']))
    {
        echo $_GET['resultado'];
    }
    $alumno=new Alumno();
    $alumnos=$alumno->leer_todo();

    ?>


<style>
.scroller{
  width: 85%;
  height: 460px;
  margin-left: 7%;
  overflow-x: hidden;
  overflow-y: scroll;
  border-radius: 5%;
  box-shadow: 2px 3px #cccccc;

}

.imagen{
  max-width: 90px;
  margin:0 0 5% 15%;
}

.btn{
  background-color: #6899d9;
  color:white;
}

.card{
  border-radius: 5%;
}

</style>

<div class="scroller">

<div class="row">
      <?php
      foreach($alumnos as $alumno){
      ?>

  <div class="card col-6 mt-3" >
    <div class="card-body ">

      <img src="../../../PNGs/usuario_masculino.png" alt="" class="imagen row ">
      <h5 class="card-title text-center"><?php echo $alumno->nombres . " " . $alumno->apellido_pat ?></h5>
      <p class="card-text mb-0"><?php echo $alumno->fecha_nac ?></p>
      <p class="card-text   "><?php echo $alumno->cp ?></p>
      <div class="col-8 mx-auto mb-0">

      <a href="#" class="btn "><?php echo $alumno->nivel ?></a>
      </div>
    </div>

    <div class="card-footer bg-transparent text-center">
        <a href="">Ver más</a>
    </div>

  </div>



  <?php 
  }
  ?>

</div>
  
</div>