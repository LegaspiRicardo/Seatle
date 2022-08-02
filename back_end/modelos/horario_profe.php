<?php
include_once "crud.php";
include_once "config.php";

class Horario_profe implements CRUD
{
    public $id_horario_profe;
    public $id_profesor;
    public $notas;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO horario_profe (id_profesor, notas)
                    VALUES (:id_profesor, :notas)");
                
                $stmt->bindParam(':id_profesor', $this->id_profesor);
                $stmt->bindParam(':notas', $this->notas);
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
                UPDATE horario_profe SET id_profesor=:id_profesor, notas=:notas  
                WHERE id_horario_profe=:id_horario_profe");

                $stmt->bindParam(':id_horario_profe',$this->id_horario_profe);
                $stmt->bindParam(':id_profesor', $this->id_profesor);
                $stmt->bindParam(':notas', $this->notas);
                
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
                DELETE FROM horario_profe  
                WHERE id_horario_profe=:id_horario_profe");
                $stmt->bindParam(':id_profesor', $this->id_profesor);
                $stmt->bindParam(':notas', $this->notas);
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
            SELECT * FROM horario_profe   
            WHERE id_horario_profe=:id_horario_profe");
            $stmt->bindParam(':id_horario_profe', $this->id_horario_profe);
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
            SELECT * FROM horario_profe");
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