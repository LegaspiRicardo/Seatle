<?php
include_once "crud.php";
include_once "config.php";

class Alumno_paga_mensualidad implements CRUD
{
    public $id_mensualidad;
    public $id_alumno;
    public $fecha_pago;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO alumno_paga_mensualidad (id_alumno, tipo_clase, fecha_pago)
                    VALUES (:id_alumno, :tipo_clase, :fecha_pago)");
                
                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':tipo_clase', $this->tipo_clase);
                $stmt->bindParam(':fecha_pago', $this->fecha_pago);
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
                UPDATE alumno_paga_mensualidad SET id_alumno=:id_alumno, fecha_pago=:fecha_pago
                 WHERE id_mensualidad=:id_mensualidad");

                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':fecha_pago', $this->fecha_pago);
                $stmt->bindParam(':id_mensualidad',$this->id_mensualidad);
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
                DELETE FROM alumno_paga_mensualidad  
                WHERE id_mensualidad=:id_mensualidad");
                $stmt->bindParam(':id_mensualidad', $this->id_mensualidad);
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
            SELECT * FROM alumno_paga_mensualidad   
            WHERE id_mensualidad=:id_mensualidad");
            $stmt->bindParam(':id_mensualidad', $this->id_mensualidad);
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
            SELECT * FROM alumno_paga_mensualidad");
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