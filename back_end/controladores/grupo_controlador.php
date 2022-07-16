<?php

include_once '../modelos/grupo.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $grupo=new Grupo();
            $grupo->nivel=$_REQUEST['nivel'];
            $resultado='';
            echo $grupo->crear();


          //  header('Location:../../');

            break;

            case '2': 
            $grupo=new Grupo();
            $grupo->nivel=$_REQUEST['nivel'];
            $grupo->id_grupo=$_REQUEST['id_grupo'];
            $resultado='';
            echo $grupo->actualizar();
                break;  //Actualizar
            

            case '3':
            $grupo=new Grupo();
            $grupo->id_grupo=$_REQUEST['id_grupo'];
            $resultado='';
            echo $grupo->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/grupo_modal/index.php?resultado='.$resultado);
    exit(); 

}