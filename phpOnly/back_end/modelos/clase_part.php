<?php
include_once "crud.php";
include_once "config.php";


class Clase_part implements CRUD
{
    public $id_clase;
    public $id_alumno;
    public $id_profesor;
    public $inicio;
    public $fin;
    public $color;

    function crear()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();
            $stmt = $conn->prepare("
            INSERT INTO clase_part (id_alumno, id_profesor, inicio, fin, color)
            VALUES (:id_alumno, :id_profesor, :inicio, :fin, :color)");

            $stmt->bindParam(':id_alumno', $this->id_alumno);
            $stmt->bindParam(':id_profesor', $this->id_profesor);
            $stmt->bindParam(':inicio', $this->inicio);
            $stmt->bindParam(':fin', $this->fin);
            $stmt->bindParam(':color', $this->color);
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
            $c->desconectar();
        }
    }

    function actualizar()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
                UPDATE clase_part SET id_alumno=:id_alumno, id_profesor=:id_profesor, inicio=:inicio, fin=:fin, color=:color
                WHERE id_clase=:id_clase");

            $stmt->bindParam(':id_alumno', $this->id_alumno);
            $stmt->bindParam(':id_profesor', $this->id_profesor);
            $stmt->bindParam(':inicio', $this->inicio);
            $stmt->bindParam(':fin', $this->fin);
            $stmt->bindParam(':color', $this->color);
            $stmt->bindParam(':id_clase', $this->id_clase);
            $stmt->execute();

            $cambios = $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }

    function borrar()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
                DELETE FROM clase_part  
                WHERE id_clase=:id_clase");
            $stmt->bindParam(':id_clase', $this->id_clase);
            $stmt->execute();
            $cambios = $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }

    function leer_id()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM clase_part   
            WHERE id_clase=:id_clase");
            $stmt->bindParam(':id_clase', $this->id_clase);
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetchObject();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }


    function tabla()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT alumno.nombres, apellido_pat, apellido_mat, profesor.nombres AS profe, inicio, fin 
            FROM ((clase_part INNER JOIN alumno ON alumno.id_alumno=clase_part.id_alumno) 
            INNER JOIN profesor ON profesor.id_profesor=clase_part.id_profesor );");

            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }



    function todos_eventos()
    {
        try {
            header('Content-Type: application/json');
            $c = new Conexion();
            $conn = $c->getConection();
            $stmt = $conn->prepare("
            SELECT alumno.nombres AS title, apellido_pat, apellido_mat, profesor.nombres AS profe, inicio AS start, fin 
            FROM ((clase_part INNER JOIN alumno ON alumno.id_alumno=clase_part.id_alumno) 
            INNER JOIN profesor ON profesor.id_profesor=clase_part.id_profesor) 
            WHERE profesor.id_profesor = clase_part.id_profesor;");

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo json_encode($result);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }


    function eventos()
    {
        try {
            
            header('Content-Type: application/json');
            $c = new Conexion();
            $conn = $c->getConection();
            $stmt = $conn->prepare("
            SELECT alumno.nombres AS title, apellido_pat, apellido_mat, profesor.nombres AS profe, inicio AS start, fin 
            FROM ((clase_part INNER JOIN alumno ON alumno.id_alumno=clase_part.id_alumno) 
            INNER JOIN profesor ON profesor.id_profesor=clase_part.id_profesor) 
            WHERE profesor.id_profesor = $this->id_profesor;");

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = $stmt->fetchAll();
            echo json_encode($result);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }


    function leer_todo()
    {
        try {
            $c = new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("
            SELECT * FROM clase_part");
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }
}
