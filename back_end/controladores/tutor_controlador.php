<?php

include_once '../modelos/tutor.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $tutor=new Tutor();
            $tutor->nombre=$_REQUEST['nombre'];
            $tutor->correo=$_REQUEST['correo'];
            $tutor->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $tutor->crear();

          //  header('Location:../../');
            break;

            case '2': 
            $tutor=new Tutor();
            $tutor->nombre=$_REQUEST['nombre'];
            $tutor->correo=$_REQUEST['correo'];
            $tutor->telefono=$_REQUEST['telefono'];
            $tutor->id_tutor=$_REQUEST['id_tutor'];
            $resultado='';
            echo $tutor->actualizar();
                break;  //Actualizar
            

            case '3':
            $tutor=new Tutor();
            $tutor->id_tutor=$_REQUEST['id_tutor'];
            $resultado='';
            echo $tutor->borrar();
                
                break;
            default: echo"opcion invalida";
    }


    header('Location: ../../front_end/vistas/tutor_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>