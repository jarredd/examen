<?php
class Usuario
{
	private $pdo;
    
    public $usuario_id = null;
    public $usuario_nombre = null;
    public $usuario_correo = null;
    public $usuario_rfc = null;
    public $usuario_password = null;

    public $matricula_alumno = null;
    public $genero = null;
	public $materno = null;
	public $nombre = null;
	public $paterno = null;
	public $telefono = null;

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
			          ->prepare("SELECT * FROM usuarios WHERE usuario_id = ?");
			          

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
			            ->prepare("DELETE FROM usuario WHERE usuario_id = ?");			          

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
			$sql = "UPDATE alumnos SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
						Sexo            = ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->fk_grado,
                    $data->correo_electronico, 
                    $data->contrasena, 
                    $data->fecha_nacimiento,
					$data->matricula_alumno,
					$data->genero,
					$data->materno,
					$data->nombre,
					$data->paterno,
					$data->telefono
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuarios $data)
	{
		try 
		{

			
		$sql = "INSERT INTO usuarios VALUES (default,?, ?, ?, ?)";

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
