<?php
    include '../../../../back_end/modelos/tutor.php';
    include '../../../../back_end/modelos/profesor.php';
    include '../../../../back_end/modelos/alumno.php';
    include '../../../../back_end/modelos/clase_part.php';
    
    

if(isset($_REQUEST['opcion'])){
    $opcion=$_REQUEST['opcion'];
    switch($opcion){
        case '1':
        $clase_part=new Clase_part();
        $clase_part->id_profesor=$_REQUEST['id_profesor'];
        $clases_part=$clase_part->eventos(); 
        
        break;
    }



}


else{

$clase_part=new Clase_part();
$clases_part=$clase_part->todos_eventos();   
}

