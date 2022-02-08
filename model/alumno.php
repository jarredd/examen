<?php
class Alumno
{
	private $pdo;
    
    public $usuario_id = null;
    public $usuario_nombre = null;
    public $usuario_correo = null;
    public $usuario_rfc = null;
    public $usuario_password = null;
	public $usuario_direccion = null;
	public $usuario_telefono = null;
	public $usuario_webSite = null;

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

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();
			//echo json_encode($stm->fetchAll(PDO::FETCH_OBJ));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function Obtener(Alumno $data)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario_id = ?");
			$stm->execute(array($data->usuario_id));	
			
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function logIn(Alumno $data){
		try {
			$result = array();

			$stm =$this->pdo->prepare( "SELECT usuario_correo FROM usuarios where usuario_correo=? and usuario_password =md5(?)");
			$stm->execute(
					array(
						$data->usuario_correo,                     
						$data->usuario_password                  
					)
				);
				$var= ($stm->fetch(PDO::FETCH_OBJ));
				//echo $var;
				$valorReturn='';
				if ($var ==false) {
					$valorReturn=0;
					
				}else{
					$valorReturn=1;
					//echo $valorReturn;
				}
				return $valorReturn;
				//return $stm->fetch(PDO::FETCH_OBJ);
				//return $->fetch(PDO::FETCH_OBJ);
		}catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($usuario_id)
	{
		try 
		{
			echo "eliminar model";
			$stm = $this->pdo->prepare("DELETE FROM usuarios WHERE usuario_id = ?");
			$stm->execute(array($usuario_id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE usuarios SET 
						usuario_nombre= ?, 
						usuario_correo= ?,
                        usuario_rfc = ?
				    WHERE usuario_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->fk_grado,
                    $data->usuario_nombre, 
                    $data->usuario_correo, 
                    $data->usuario_rfc
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
			$sql = "INSERT INTO usuarios VALUES (default,?, ?, ?, md5(?),'','','')";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->usuario_nombre, 
                    $data->usuario_correo, 
                    $data->usuario_rfc,
					$data->usuario_password                  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
