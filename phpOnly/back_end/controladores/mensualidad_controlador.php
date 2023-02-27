<?php

include_once '../modelos/mensualidad.php';
include_once '../modelos/alumno_paga_mensualidad.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $mensualidad=new Mensualidad();
            $mensualidad->id_alumno=$_REQUEST['id_alumno'];
            $mensualidad->tipo_clase=$_REQUEST['tipo_clase'];
            $mensualidad->precio_clase=$_REQUEST['precio_clase'];
            $mensualidad->num_clases=$_REQUEST['num_clases'];
            $mensualidad->total=$_REQUEST['total'];
            $resultado='';
            echo $mensualidad->crear();


        
          //  header('Location:../../');


            break;

            case '2': 
            $mensualidad=new Mensualidad();
            $mensualidad->id_alumno=$_REQUEST['id_alumno'];
            $mensualidad->tipo_clase=$_REQUEST['tipo_clase'];
            $mensualidad->precio_clase=$_REQUEST['precio_clase'];
            $mensualidad->num_clases=$_REQUEST['num_clases'];
            $mensualidad->total=$_REQUEST['total'];
            $mensualidad->id_mensualidad=$_REQUEST['id_mensualidad'];
            $resultado='';
            echo $mensualidad->actualizar();
                break;  //Actualizar
            

            case '3':
            $mensualidad=new Mensualidad();
            $mensualidad->id_mensualidad=$_REQUEST['id_mensualidad'];
            $resultado='';
            echo $mensualidad->borrar();
                
                break;
            default: echo"opcion invalida";

            
            case '4':
                $mensualidad=new Mensualidad();
                $alumno->id_alumno=$_REQUEST['id_alumno'];
                $resultado='';
                echo $mensualidad->last_alumno();


    }

    header('Location: ../../front_end/vistas/dashboard/index.php?resultado='.$resultado);
    exit(); 

}




?>