<?php
//archivo iteractua con la tabla
class Cita
{
	// una vez salga  de cita el valor se destruye
	private $pdo;
    // cuando las invoque estan in memoria
    public $id_cita;
    public $nombre;
	public $documento;
    public $fecha_actual;
    public $consulta;
   


	public function __CONSTRUCT()
	{
		try
		{
			//llama al metodo conexion 
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
// para hacer consulta a la bd y listar todos los valores que tenga la tabla
	public function Listar()
	{
		try
		{   // varible tipo array
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cita");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);//convierte array asociativo para mostrar
		}
		catch(Exception $e)//hace llamado a exception y muestra error
		{
			die($e->getMessage());
		}
	}
   // obtener o leer o  capturar  
	public function getting($id_cita)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cita WHERE id_cita = ?");
			          

			$stm->execute(array($id_cita));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
//borrar datos de la tabla
	public function Eliminar($id_cita)
	{
		try 
		{
			$stm = $this->pdo

			            ->prepare("DELETE FROM cita WHERE id_cita = ?");			          

			$stm->execute(array($id_cita));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			//actualiza cita, lo que reciba lo carga
			$sql = "UPDATE cita SET  nombre=?, documento=?,  fecha_actual=?, consulta=? WHERE id_cita = ?"; 
				    


			$this->pdo->prepare($sql)
			     ->execute(
				    array(//array $data
					 
                        $data->nombre, 
						$data->documento,
                        $data->fecha_actual,
                        $data->consulta,
                        $data->id_cita
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)//en los simbolos interrogacion lo que haya capturado en $data
	{
		try 
		{
		$sql = "INSERT INTO `cita` (nombre,documento,fecha_actual,consulta) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					
                    $data->nombre, 
					$data->documento,
                    $data->fecha_actual,
                    $data->consulta,
                                      
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
