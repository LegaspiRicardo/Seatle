<?php
    session_start()  ;
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
            $profesor->contrasena=$_REQUEST['contrasena'];
            $profesor->contrasena1=$_REQUEST['contrasena1'];
            $profesor->status=$_REQUEST['status'];
            $profesor->puesto=$_REQUEST['puesto'];
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
            $profesor->contrasena=$_REQUEST['contrasena'];
            $profesor->contrasena1=$_REQUEST['contrasena1'];
            $profesor->status=$_REQUEST['status'];
            $profesor->puesto=$_REQUEST['puesto'];
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

            case '4':                                        //Log in
                $profesor=new Profesor();
                $profesor->nombres=$_REQUEST['nombres'];
                $profesor->contrasena=$_REQUEST['contrasena'];
                $profesor->puesto=$_REQUEST['puesto'];
                $usuario=$profesor->inicio_sesion();

                if($usuario!=null){

                    //Si esta registrado y si cumple con el puesto correspondiente accederá
                    if($usuario->puesto=$_REQUEST['puesto'] == $usuario->puesto="Admin")
                    {
                        $_SESSION['nombres']=$usuario->nombres;
                        $_SESSION['contrasena']=$usuario->contrasena;
                        $_SESSION['puesto']=$usuario->puesto;
                        header('Location: ../../front_end/vistas/privado/dashboard/index.php?');
                        exit();
                    }
                    if($usuario->puesto=$_REQUEST['puesto'] == $usuario->puesto="Profesor" )
                    {
                        $_SESSION['nombres']=$usuario->nombres;
                        $_SESSION['contrasena']=$usuario->contrasena;
                        $_SESSION['puesto']=$usuario->puesto;
                        header('Location: ../../front_end/vistas/publico/panel_control/index.php?');
                        exit();
                    }
                    else
                    {
                        session_unset();
                        session_destroy();
                        $resultado="usuario y/o contraseña no validos";
                        header('Location: ../../front_end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                        exit();
                    }
                }

                else{
                    session_unset();
                    session_destroy();
                    $resultado="Usuario y/o contraseña no validos";
                    header('Location: ../../front_end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                    exit();
                }
            break;

            case '5':                                            //Log out
                session_unset();
                session_destroy();
                header('Location: ../../front_end/vistas/privado/sesion/sign-in.php?resultado='.$resultado);
                exit();
            break;



    }

    header('Location: ../../front_end/vistas/privado/profesor/index.php?resultado='.$resultado);
    exit(); 

}




?>