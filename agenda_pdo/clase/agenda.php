<?php

class agenda
{
    private $pdo;

    public $id;
    public $nombres;
    public $apellidos;
    public $telefono;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Connect::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM agenda");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("SELECT * FROM agenda WHERE id = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("DELETE FROM agenda WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE agenda SET 
						
						nombres          = ?, 
						apellidos        = ?,
                        telefono         = ?
						
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nombres,
                        $data->apellidos,
                        $data->telefono,
                        $data->id
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(agenda $data)
    {
        try
        {
            $sql = "INSERT INTO agenda (nombres,apellidos,telefono) 
		        VALUES ( ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nombres,
                        $data->apellidos,
                        $data->telefono

                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}