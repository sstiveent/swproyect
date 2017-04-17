<?php
require_once("../model/Interes.php");
require_once("config.php");

class InteresDAO{

	public function __construct()
	{
		
	}

	function listarInteresesAll(){
		global $db;

		$sql1="SELECT  
		`Interes`.`idInteres`,
		`Interes`.`nombre`,
		`Foto`.`url`,
		`Foto`.`alt` FROM 
		`Interes` 
		INNER JOIN `Foto` ON `Interes`.`Foto_idFoto` = `Foto`.`idFoto`;"; 
		$result1=  $db->ejecutarConsulta($sql1);
		$intereses = array();
		while ($fila = $db->obtenerFila($result1)){
			$alt =  !is_null($fila['alt'])?$fila['alt']:"";
			$interes = array(
				'id' => $fila['idInteres'],
				'nombre' => $fila['nombre'],
				'url' => $fila['url'],
				'alt' => $alt
				);
			array_push($intereses, $interes);	
		}
		return $intereses;
	}



}

?>