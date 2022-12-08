<?php
include_once "crud.php";
include_once "config.php";

class Grupo_mixto implements CRUD
{
    public $id_grupo_mixto;
    public $id_alumno;
    public $nivel;

    function crear()
    {
        try{
                $c=new Conexion();
                $conn=$c->getConection();
                $stmt = $conn->prepare("
                    INSERT INTO grupo_mixto (id_alumno, nivel)
                    VALUES (:id_alumno, :nivel)");
                
                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':nivel', $this->nivel);
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
                UPDATE grupo_mixto SET id_alumno=:id_alumno, nivel=:nivel  
                WHERE id_grupo_mixto=:id_grupo_mixto");

                $stmt->bindParam(': nivel', $this->nivel);
                
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
                DELETE FROM grupo_mixto  
                WHERE id_grupo_mixto=:id_grupo_mixto");
                $stmt->bindParam(':id_alumno', $this->id_alumno);
                $stmt->bindParam(':nivel', $this->nivel);
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
            SELECT * FROM grupo_mixto   
            WHERE id_grupo_mixto=:id_grupo_mixto");
            $stmt->bindParam(':id_alumno', $this->id_alumno);
            $stmt->bindParam(':nivel', $this->nivel);
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
            SELECT * FROM grupo_mixto");
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