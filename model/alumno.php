<?php
class Alumno
{
	private $pdo;
    
    public $id;
    public $Client_name;
    public $Team;
    public $Request;
    public $Date;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM consultas");
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
			          ->prepare("SELECT * FROM consultas WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM consultas WHERE id = ?");			          

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
			$sql = "UPDATE consultas SET 
						Client_name          = ?, 
						Team        = ?,
						Request            = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->client_name, 
                        $data->team,
                        $data->request,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO consultas (Client_name,Team,Request, date) 
		        VALUES (?, ?, ?, ?)";


		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->client_name,
                    $data->team, 
                    $data->request, 
                    $data->date
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
		
	}
}
