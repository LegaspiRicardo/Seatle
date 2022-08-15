<?php

include_once '../modelos/profesor.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $profesor=new Profesor();
            $profesor->nombres=$_REQUEST['nombres'];
            $profesor->apellidos=$_REQUEST['apellidos'];
            $profesor->telefono=$_REQUEST['telefono'];
            $profesor->fecha_nac=$_REQUEST['fecha_nac'];
            $profesor->fecha_ing=$_REQUEST['fecha_ing'];
            $profesor->alberca=$_REQUEST['alberca'];
            $profesor->sueldo=$_REQUEST['sueldo'];
            $profesor->status=$_REQUEST['status'];
            $profesor->comentarios=$_REQUEST['comentarios'];
            $resultado='';
            echo $profesor->crear();


          //  header('Location:../../');


            break;

            case '2': 
            $profesor=new Profesor();
            $profesor->nombres=$_REQUEST['nombres'];
            $profesor->apellidos=$_REQUEST['apellidos'];
            $profesor->telefono=$_REQUEST['telefono'];
            $profesor->fecha_nac=$_REQUEST['fecha_nac'];
            $profesor->fecha_ing=$_REQUEST['fecha_ing'];
            $profesor->alberca=$_REQUEST['alberca'];
            $profesor->sueldo=$_REQUEST['sueldo'];
            $profesor->status=$_REQUEST['status'];
            $profesor->comentarios=$_REQUEST['comentarios'];
            $profesor->id_profesor=$_REQUEST['id_profesor'];
            $resultado='';
            echo $profesor->actualizar();
                break;  //Actualizar
            

            case '3':
            $profesor=new Profesor();
            $profesor->id_profesor=$_REQUEST['id_profesor'];
            $resultado='';
            echo $profesor->borrar();
                
                break;
            default: echo"opcion invalida";
    }

    header('Location: ../../front_end/vistas/profesor_modal/index.php?resultado='.$resultado);
    exit(); 

}




?>