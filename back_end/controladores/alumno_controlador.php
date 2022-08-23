<?php

include_once '../modelos/alumno.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
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
            $alumno->tipo_clase=$_REQUEST['tipo_clase'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];
            $resultado='';
            echo $alumno->crear();


        
          //  header('Location:../../');

            break;

            case '2': 
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
            $alumno->tipo_clase=$_REQUEST['tipo_clase'];
            $alumno->nivel=$_REQUEST['nivel'];
            $alumno->comentarios=$_REQUEST['comentarios'];
            $alumno->alberca=$_REQUEST['alberca'];
            $alumno->status=$_REQUEST['status'];
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->actualizar();
            header('Location:../../front_end/web_site/home.html');

                break;  //Actualizar
            

            case '3':
            $alumno=new Alumno();
            $alumno->id_alumno=$_REQUEST['id_alumno'];
            $resultado='';
            echo $alumno->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/alumno_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>