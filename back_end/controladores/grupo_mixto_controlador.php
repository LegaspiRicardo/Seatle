<?php

include_once '../modelos/grupo_mixto.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $grupo_mixto=new Grupo_mixto();
            $grupo_mixto->id_alumno=$_REQUEST['id_alumno'];
            $grupo_mixto->nivel=$_REQUEST['nivel'];
            $resultado='';
            echo $grupo_mixto->crear();


          //  header('Location:../../');

            break;

            case '2': 
            $grupo_mixto=new Grupo_mixto();
            $grupo_mixto->id_alumno=$_REQUEST['id_alumno'];
            $grupo_mixto->nivel=$_REQUEST['nivel'];
            $grupo_mixto->id_grupo_mixto=$_REQUEST['id_grupo_mixto'];
            $resultado='';
            echo $grupo_mixto->actualizar();
                break;  //Actualizar
            

            case '3':
            $grupo_mixto=new Grupo_mixto();
            $grupo_mixto->id_grupo_mixto=$_REQUEST['id_grupo_mixto'];
            $resultado='';
            echo $grupo_mixto->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/grupo_mixto_modal/index.php?resultado='.$resultado);
    exit(); 

}