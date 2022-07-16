<?php
include_once "crud.php";
include_once "config.php";

class Tutor implements CRUD
{
    public $id_tutor;
    public $nombre;
    public $correo;
    public $telefono;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO tutor (nombre, correo, telefono)
                    VALUES (:nombre, :correo, :telefono)");
                
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':correo', $this->correo);
           $stmt->bindParam(':telefono', $this->telefono);
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
                UPDATE tutor SET nombre=:nombre, correo=:correo, telefono=:telefono  
                WHERE id_tutor=:id_tutor");

                $stmt->bindParam(':nombre', $this->nombre);
                $stmt->bindParam(':correo', $this->correo);
                $stmt->bindParam(':telefono', $this->telefono);
              
              $stmt->bindParam(':id_tutor',$this->id_tutor);
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
                DELETE FROM tutor  
                WHERE id_tutor=:id_tutor");
                $stmt->bindParam(':id_tutor', $this->id_tutor);
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
            SELECT * FROM tutor   
            WHERE id_tutor=:id_tutor");
            $stmt->bindParam(':id_tutor', $this->id_tutor);
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
            SELECT * FROM tutor");
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