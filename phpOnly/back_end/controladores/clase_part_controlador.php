<?php

include_once '../modelos/clase_part.php';


if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':      //crear
            $clase_part=new Clase_part();
            $clase_part->id_alumno=$_REQUEST['id_alumno'];
            $clase_part->id_profesor=$_REQUEST['id_profesor'];
            $clase_part->inicio=$_REQUEST['inicio'];
            $clase_part->fin=$_REQUEST['fin'];
            $clase_part->color=$_REQUEST['color'];
            $resultado='';
            echo $clase_part->crear();
            header('Location: ../../front_end/vistas/privado/clase_part/index.php?resultado='.$resultado);
        break;

        case '5':      //crear clase en dashboard
            $clase_part=new Clase_part();
            $clase_part->id_alumno=$_REQUEST['id_alumno'];
            $clase_part->id_profesor=$_REQUEST['id_profesor'];
            $clase_part->inicio=$_REQUEST['inicio'];
            $clase_part->fin=$_REQUEST['fin'];
            $clase_part->color=$_REQUEST['color'];
            $resultado='';
            echo $clase_part->crear();
            header('Location: ../../front_end/vistas/privado/dashboard/index.php?resultado='.$resultado);
        break;

        case '2':               //Actualizar
            $clase_part=new Clase_part();
            $clase_part->id_alumno=$_REQUEST['id_alumno'];
            $clase_part->id_profesor=$_REQUEST['id_profesor'];
            $clase_part->inicio=$_REQUEST['inicio'];
            $clase_part->fin=$_REQUEST['fin'];
            $clase_part->color=$_REQUEST['color'];
            $clase_part->id_clase=$_REQUEST['id_clase'];
            $resultado='';
            echo $clase_part->actualizar();
        break;  
            

        case '3':
            $clase_part=new Clase_part();
            $clase_part->id_clase=$_REQUEST['id_clase'];
            $resultado='';
            echo $clase_part->borrar();        
        break;




        case '4':
            $clase_part=new Clase_part();
            $clase_part->id_profesor=$_REQUEST['id_profesor'];
            echo $clase_part->eventos(); 
        
            header('Location: ../../front_end/vistas/privado/clase_part/eventos.php?resultado='.$resultado); 
            
        break;







    default: echo"opcion invalida";
    }


}