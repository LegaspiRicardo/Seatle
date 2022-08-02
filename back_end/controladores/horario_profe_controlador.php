<?php

include_once '../modelos/horario_profe.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $horario_profe=new Horario_profe();
            $horario_profe->id_profesor=$_REQUEST['id_profesor'];
            $horario_profe->notas=$_REQUEST['notas'];
            $resultado='';
            echo $horario_profe->crear();


          //  header('Location:../../');


            break;

            case '2': 
            $horario_profe=new Horario_profe();
            $horario_profe->id_profesor=$_REQUEST['id_profesor'];
            $horario_profe->id_horario_profe=$_REQUEST['id_horario_profe'];
            $horario_profe->notas=$_REQUEST['notas'];
            $resultado='';
            echo $horario_profe->actualizar();
                break;  //Actualizar
            

            case '3':
            $horario_profe=new Horario_profe();
            $horario_profe->id_horario_profe=$_REQUEST['id_horario_profe'];
            $resultado='';
            echo $horario_profe->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/horario_profe_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>