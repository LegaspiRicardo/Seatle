<?php
include_once "crud.php";
include_once "config.php";

class Profesor implements CRUD
{
    public $id_profesor;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $fecha_nac;
    public $fecha_ing;
    public $alberca;
    public $sueldo;
    public $contrasena;
    public $contrasena1;
    public $status;
    public $puesto;
    public $comentarios;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO profesor (nombres, apellidos, telefono, fecha_nac, fecha_ing, alberca, sueldo, contrasena, contrasena1, status, puesto, comentarios)
                    VALUES (:nombres, :apellidos, :telefono, :fecha_nac, :fecha_ing, :alberca, :sueldo, :contrasena, :contrasena1, :status, :puesto, :comentarios)");
                
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellidos', $this->apellidos);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':fecha_nac', $this->fecha_nac);
                $stmt->bindParam(':fecha_ing', $this->fecha_ing);
                $stmt->bindParam(':alberca', $this->alberca);
                $stmt->bindParam(':sueldo', $this->sueldo);
                $stmt->bindParam(':contrasena',$this->contrasena);
                $stmt->bindParam(':contrasena1',$this->contrasena1);
                $stmt->bindParam(':status',$this->status);
                $stmt->bindParam(':puesto',$this->puesto);
                $stmt->bindParam(':comentarios', $this->comentarios);
                $stmt->execute();
                return $stmt->rowCount();
            }
            catch(PDOException $e)
            {
                echo "Error: " . $e->getMessage();
            }
            finally
            {
                $conn = null;
                $c->desconectar();
            }
    }

    function actualizar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                UPDATE profesor SET nombres=:nombres, apellidos=:apellidos, telefono=:telefono, fecha_nac=:fecha_nac, fecha_ing=:fecha_ing, alberca=:alberca, sueldo=:sueldo, contrasena=:contrasena, contrasena1=:contrasena1, status=:status, puesto=:puesto, comentarios=:comentarios  
                WHERE id_profesor=:id_profesor");

                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellidos', $this->apellidos);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':fecha_nac', $this->fecha_nac);
                $stmt->bindParam(':fecha_ing', $this->fecha_ing);
                $stmt->bindParam(':alberca', $this->alberca);
                $stmt->bindParam(':sueldo', $this->sueldo);
                $stmt->bindParam(':contrasena',$this->contrasena);
                $stmt->bindParam(':contrasena1',$this->contrasena1);
                $stmt->bindParam(':status',$this->status);
                $stmt->bindParam(':puesto',$this->puesto);
                $stmt->bindParam(':comentarios', $this->comentarios);
                $stmt->bindParam(':id_profesor',$this->id_profesor);
                $stmt->execute();

                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } 
            finally
            {
                $conn = null;
            }
    }

    function borrar()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();

                $stmt = $conn->prepare("
                DELETE FROM profesor  
                WHERE id_profesor=:id_profesor");
                $stmt->bindParam(':id_profesor', $this->id_profesor);
                $stmt->execute();
                $cambios=$stmt->rowCount();
            } 
            catch(PDOException $e) 
            {
                echo "Error: " . $e->getMessage();
            } finally
            {
                $conn = null;
            }
    }

    function leer_id()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM profesor   
            WHERE id_profesor=:id_profesor");
            $stmt->bindParam(':id_profesor', $this->id_profesor);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }

    function leer_todo()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM profesor");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result=$stmt->fetchAll();
            return $result;

            } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            } finally{
            $conn = null;
            }  
    }


    function inicio_sesion()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM profesor   
            WHERE nombres=:nombres and contrasena=:contrasena and puesto=:puesto");
            $stmt->bindParam(':nombres', $this->nombres);
            $stmt->bindParam(':contrasena', $this->contrasena);
            $stmt->bindParam(':puesto', $this->puesto);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchObject();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }
    
}

?>