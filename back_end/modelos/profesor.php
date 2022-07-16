<?php
include_once "crud.php";
include_once "config.php";

class Profesor implements CRUD
{
    public $id_profesor;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $sueldo;
    public $status;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO profesor (nombres, apellidos, telefono, sueldo, status)
                    VALUES (:nombres, :apellidos, :telefono, :sueldo, :status)");
                
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellidos', $this->apellidos);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':sueldo', $this->sueldo);
                $stmt->bindParam(':status',$this->status);
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
                UPDATE profesor SET nombres=:nombres, apellidos=:apellidos, telefono=:telefono, sueldo=:sueldo, status=:status  
                WHERE id_profesor=:id_profesor");

                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellidos', $this->apellidos);
                $stmt->bindParam(':telefono', $this->telefono);
                $stmt->bindParam(':sueldo', $this->sueldo);
                $stmt->bindParam(':status',$this->status);
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
}

?>