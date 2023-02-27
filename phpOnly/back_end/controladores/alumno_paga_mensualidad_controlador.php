<?php

include_once '../modelos/mensualidad.php';
include_once '../modelos/alumno_paga_mensualidad_controlador.php';
/*if(isset($_REQUEST)){
    print_r($_REQUEST);
}
*/

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $alumno_paga_mensualidad=new Alumno_paga_mensualidad();
            $alumno_paga_mensualidad->id_alumno=$_REQUEST['id_alumno'];
            $alumno_paga_mensualidad->fecha_pago=$_REQUEST['fecha_pago'];
            $resultado='';
            echo $alumno_paga_mensualidad->crear();


        
          //  header('Location:../../');


            break;

            case '2': 
            $alumno_paga_mensualidad=new Alumno_paga_mensualidad();
            $alumno_paga_mensualidad->id_alumno=$_REQUEST['id_alumno'];
            $alumno_paga_mensualidad->fecha_pago=$_REQUEST['fecha_pago'];
            $alumno_paga_mensualidad->id_mensualidad=$_REQUEST['id_mensualidad'];
            $resultado='';
            echo $alumno_paga_mensualidad->actualizar();
                break;  //Actualizar
            

            case '3':
            $alumno_paga_mensualidad=new Alumno_paga_mensualidad();
            $alumno_paga_mensualidad->id_mensualidad=$_REQUEST['id_mensualidad'];
            $resultado='';
            echo $alumno_paga_mensualidad->borrar();
                
                break;
            default: echo"opcion invalida";

            
    }

    header('Location: ../../front_end/vistas/dashboard/index.php?resultado='.$resultado);
    exit(); 

}




?>