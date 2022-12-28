<?php
include_once "crud.php";
include_once "config.php";

class Alumno implements CRUD
{
    public $id_alumno;
    public $nombres;
    public $apellido_pat;
    public $apellido_mat;
    public $calle;
    public $numero;
    public $colonia;
    public $cp;
    public $fecha_nac;
    public $sexo;
    public $fecha_ing;
    public $id_tutor;
    public $nivel;
    public $comentarios;
    public $alberca;
    public $status;





    function crear()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();
            $stmt = $conn->prepare("
                INSERT INTO alumno (nombres, apellido_pat, apellido_mat, calle, numero, colonia, cp, fecha_nac, sexo, fecha_ing, id_tutor, nivel, comentarios, alberca, status)
                VALUES (:nombres, :apellido_pat, :apellido_mat, :calle, :numero, :colonia, :cp, :fecha_nac, :sexo, :fecha_ing, :id_tutor, :nivel, :comentarios, :alberca, :status)");
                
                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido_pat', $this->apellido_pat);
                $stmt->bindParam(':apellido_mat', $this->apellido_mat);
                $stmt->bindParam(':calle', $this->calle);
                $stmt->bindParam(':numero', $this->numero);
                $stmt->bindParam(':colonia', $this->colonia);
                $stmt->bindParam(':cp', $this->cp);
                $stmt->bindParam(':fecha_nac', $this->fecha_nac);
                $stmt->bindParam(':sexo', $this->sexo);
                $stmt->bindParam(':fecha_ing', $this->fecha_ing);
                $stmt->bindParam(':id_tutor', $this->id_tutor);
                $stmt->bindParam(':nivel', $this->nivel);
                $stmt->bindParam(':comentarios', $this->comentarios);
                $stmt->bindParam(':alberca', $this->alberca);
                $stmt->bindParam(':status', $this->status);
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
                UPDATE alumno SET nombres=:nombres, apellido_pat=:apellido_pat, apellido_mat=:apellido_mat, calle=:calle, numero=:numero, colonia=:colonia, cp=:cp, fecha_nac=:fecha_nac, sexo=:sexo, fecha_ing=:fecha_ing, id_tutor=:id_tutor, nivel=:nivel, comentarios=:comentarios, alberca=:alberca, status=:status  
                WHERE id_alumno=:id_alumno");

                $stmt->bindParam(':nombres', $this->nombres);
                $stmt->bindParam(':apellido_pat', $this->apellido_pat);
                $stmt->bindParam(':apellido_mat', $this->apellido_mat);
                $stmt->bindParam(':calle', $this->calle);
                $stmt->bindParam(':numero', $this->numero);
                $stmt->bindParam(':colonia', $this->colonia);
                $stmt->bindParam(':cp', $this->cp);
                $stmt->bindParam(':fecha_nac', $this->fecha_nac);
                $stmt->bindParam(':sexo', $this->sexo);
                $stmt->bindParam(':fecha_ing', $this->fecha_ing);
                $stmt->bindParam(':id_tutor', $this->id_tutor);
                $stmt->bindParam(':nivel', $this->nivel);
                $stmt->bindParam(':comentarios', $this->comentarios);
                $stmt->bindParam(':alberca', $this->alberca);
                $stmt->bindParam(':status', $this->status);

                $stmt->bindParam(':id_alumno',$this->id_alumno);
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
                DELETE FROM alumno  
                WHERE id_alumno=:id_alumno");
                $stmt->bindParam(':id_alumno', $this->id_alumno);
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
            SELECT * FROM alumno   
            WHERE id_alumno=:id_alumno");
            $stmt->bindParam(':id_alumno', $this->id_alumno);
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
            SELECT * FROM alumno");
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


    function baja()
    {
        try{
            $c=new Conexion();
            $conn=$c->getConection();

            $stmt = $conn->prepare("
            UPDATE alumno SET nombres=:nombres, apellido_pat=:apellido_pat, apellido_mat=:apellido_mat, calle=:calle, numero=:numero, colonia=:colonia, cp=:cp, fecha_nac=:fecha_nac, sexo=:sexo, fecha_ing=:fecha_ing, id_tutor=:id_tutor, nivel=:nivel, comentarios=:comentarios, alberca=:alberca, status=:status  
            WHERE id_alumno=:id_alumno");

            $stmt->bindParam(':nombres', $this->nombres);
            $stmt->bindParam(':apellido_pat', $this->apellido_pat);
            $stmt->bindParam(':apellido_mat', $this->apellido_mat);
            $stmt->bindParam(':calle', $this->calle);
            $stmt->bindParam(':numero', $this->numero);
            $stmt->bindParam(':colonia', $this->colonia);
            $stmt->bindParam(':cp', $this->cp);
            $stmt->bindParam(':fecha_nac', $this->fecha_nac);
            $stmt->bindParam(':sexo', $this->sexo);
            $stmt->bindParam(':fecha_ing', $this->fecha_ing);
            $stmt->bindParam(':id_tutor', $this->id_tutor);
            $stmt->bindParam(':nivel', $this->nivel);
            $stmt->bindParam(':comentarios', $this->comentarios);
            $stmt->bindParam(':alberca', $this->alberca);
            $stmt->bindParam(':status', $this->status);

            $stmt->bindParam(':id_alumno',$this->id_alumno);
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

    function ver_bajas()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("

            SELECT * FROM `alumno` WHERE status = 'Baja'");
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchAll();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }


    function revisar_pago()
    {
        try{
            $c=new Conexion();
            $conn = $c->getConection();

            $stmt = $conn->prepare("

            SELECT * FROM `alumno` WHERE status = 'Activo'");
            $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $result = $stmt-> fetchAll();
            return $result; 
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally{
            $conn = null;
            }                 
    }

    
}

?>