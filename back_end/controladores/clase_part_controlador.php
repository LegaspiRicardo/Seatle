<?php

include_once '../modelos/clase_part.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $clase_part=new Clase_part();
            $clase_part->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $clase_part->crear();


          //  header('Location:../../');

            break;

            case '2': 
            $clase_part=new Clase_part();
            $clase_part->id_alumno=$_REQUEST['id_alumno'];
            $clase_part->id_clase=$_REQUEST['id_clase'];
            $resultado='';
            echo $clase_part->actualizar();
                break;  //Actualizar
            

            case '3':
            $clase_part=new Clase_part();
            $clase_part->id_clase=$_REQUEST['id_clase'];
            $resultado='';
            echo $clase_part->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/dashboard/index.php?resultado='.$resultado);
    exit(); 

}