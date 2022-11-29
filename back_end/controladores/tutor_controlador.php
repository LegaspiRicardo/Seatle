<?php
include_once '../modelos/tutor.php';


if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':                                           //Crear tutor en Panel de control
            $tutor=new Tutor();
            $tutor->nombre=$_REQUEST['nombre'];
            $tutor->correo=$_REQUEST['correo'];
            $tutor->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $tutor->crear();
            header('Location: ../../front_end/vistas/privado/dashboard/index.php?resultado='.$resultado);
            break;

        case '4':                                           //Crear tutor en pag Tutor
            $tutor=new Tutor();
            $tutor->nombre=$_REQUEST['nombre'];
            $tutor->correo=$_REQUEST['correo'];
            $tutor->telefono=$_REQUEST['telefono'];
            $resultado='';
            echo $tutor->crear();
            header('Location: ../../front_end/vistas/privado/tutor/index.php?resultado='.$resultado);
            break;

        case '2':                                           //Actualizar tutor en pag Tutor
            $tutor=new Tutor();
            $tutor->nombre=$_REQUEST['nombre'];
            $tutor->correo=$_REQUEST['correo'];
            $tutor->telefono=$_REQUEST['telefono'];
            $tutor->id_tutor=$_REQUEST['id_tutor'];
            $resultado='';
            echo $tutor->actualizar();
            header('Location: ../../front_end/vistas/privado/tutor/index.php?resultado='.$resultado);
            break;  
            

        case '3':                                               //Actualizar tutor en pag Tutor
            $tutor=new Tutor();
            $tutor->id_tutor=$_REQUEST['id_tutor'];
            $resultado='';
            echo $tutor->borrar();
            header('Location: ../../front_end/vistas/privado/tutor/index.php?resultado='.$resultado);
            break;
            default: echo"opcion invalida";
    }




}




?>