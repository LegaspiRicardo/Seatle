<?php
include_once '../modelos/alumno.php';

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':                                           //Crear alumno
            $alumno=new Alumno();
            $alumno->nombres=$_REQUEST['nombres'];
            $alumno->apellido_pat=$_REQUEST['apellido_pat'];
            $alumno->apellido_mat=$_REQUEST['apellido_mat'];
            $alumno->calle=$_REQUEST['calle'];
            $alumno->numero=$_REQUEST['numero'];
            $alumno->colonia=$_REQUEST['colonia'];
            $alumno->cp=$_REQUEST['cp'];
            $alumno->fecha_nac=$_REQUEST['fecha_nac'];
            $alumno->sexo=$_REQUEST['sexo'];
            $alumno->fecha_ing=$_REQUEST['fecha_ing'];
            $alumno->id_tutor=$_REQUEST['id_tutor'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];

            $resultado='';
            echo $alumno->crear();
            header('Location: ../../front_end/vistas/privado/alumno/index.php?resultado='.$resultado);
            break;


        case '2':                                           //Actualizar alumno en Index
            $alumno=new Alumno();
            $alumno->nombres=$_REQUEST['nombres'];
            $alumno->apellido_pat=$_REQUEST['apellido_pat'];
            $alumno->apellido_mat=$_REQUEST['apellido_mat'];
            $alumno->calle=$_REQUEST['calle'];
            $alumno->numero=$_REQUEST['numero'];
            $alumno->colonia=$_REQUEST['colonia'];
            $alumno->cp=$_REQUEST['cp'];
            $alumno->fecha_nac=$_REQUEST['fecha_nac'];
            $alumno->sexo=$_REQUEST['sexo'];
            $alumno->fecha_ing=$_REQUEST['fecha_ing'];
            $alumno->id_tutor=$_REQUEST['id_tutor'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->actualizar();
            header('Location: ../../front_end/vistas/privado/alumno/index.php?resultado='.$resultado);
            break;  

        case '5':                                           //Actualizar alumno en Index_baja
            $alumno=new Alumno();
            $alumno->nombres=$_REQUEST['nombres'];
            $alumno->apellido_pat=$_REQUEST['apellido_pat'];
            $alumno->apellido_mat=$_REQUEST['apellido_mat'];
            $alumno->calle=$_REQUEST['calle'];
            $alumno->numero=$_REQUEST['numero'];
            $alumno->colonia=$_REQUEST['colonia'];
            $alumno->cp=$_REQUEST['cp'];
            $alumno->fecha_nac=$_REQUEST['fecha_nac'];
            $alumno->sexo=$_REQUEST['sexo'];
            $alumno->fecha_ing=$_REQUEST['fecha_ing'];
            $alumno->id_tutor=$_REQUEST['id_tutor'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->actualizar();
            header('Location: ../../front_end/vistas/privado/alumno/index_baja.php?resultado='.$resultado);
            break; 
            

        case '3':                                               //Eliminar alumno
            $alumno=new Alumno();
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->borrar();
            header('Location: ../../front_end/vistas/privado/alumno/index.php?resultado='.$resultado);
        break;
            default: echo"opcion invalida";

        case '4':                                           //Dar de baja alumno
            $alumno=new Alumno();
            $alumno->nombres=$_REQUEST['nombres'];
            $alumno->apellido_pat=$_REQUEST['apellido_pat'];
            $alumno->apellido_mat=$_REQUEST['apellido_mat'];
            $alumno->calle=$_REQUEST['calle'];
            $alumno->numero=$_REQUEST['numero'];
            $alumno->colonia=$_REQUEST['colonia'];
            $alumno->cp=$_REQUEST['cp'];
            $alumno->fecha_nac=$_REQUEST['fecha_nac'];
            $alumno->sexo=$_REQUEST['sexo'];
            $alumno->fecha_ing=$_REQUEST['fecha_ing'];
            $alumno->id_tutor=$_REQUEST['id_tutor'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->baja();
            header('Location: ../../front_end/vistas/privado/alumno/index.php?resultado='.$resultado);
        break; 
    }




}




?>