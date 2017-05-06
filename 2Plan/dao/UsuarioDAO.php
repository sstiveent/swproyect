<?php
require_once("../model/Usuario.php");
require_once("config.php");

class UsuarioDAO{

	public function __construct()
	{
		
	}
	public function obtenerIdUsuario($id, $serviceLogin){
		global $db;
		$idP = $db->proteger($id);
		if($serviceLogin == "Google"){
			$sql1="SELECT `idUsuario` FROM `Usuario` WHERE `idGoogle` = ".$idP.";";
		}else if ($serviceLogin == "Facebook"){
			$sql1="SELECT `idUsuario` FROM `Usuario` WHERE `idFacebook` = ".$idP.";";
		}else{
			echo "Acceso no autorizado";
			exit;
		}
		$result1 =  $db->ejecutarConsulta($sql1);
		$fila=$db->obtenerFila($result1);
		return $fila[0];
	}

	public function agregarIntereses($idUsuario, $intereses){
		global $db;
		$usuarioP = $db->proteger($idUsuario);
		
		$sql="";
		
		foreach ($intereses as $key => $value) {
			$interes = $db->proteger($value);
			$sql.=" INSERT INTO `Usuario_has_Interes` (`Usuario_idUsuario`, `Interes_idInteres`) VALUES (".$usuarioP.", ".$interes."); ";
		}
			$result1 =  $db->ejecutarMultiConsulta($sql);
		return $result1? 1:-1;

	}
	public function obtenerInteresesUsuario($idUsuario){
		global $db;
		$idUsuarioP = $db->proteger($idUsuario);
		$sql2="SELECT `Interes`.`idInteres`, `Interes`.`nombre` FROM `Usuario_has_Interes`
		INNER JOIN `Interes` ON `Usuario_has_Interes`.`Interes_idInteres`=`Interes`.`idInteres` WHERE `Usuario_idUsuario` = ".$idUsuarioP.";";
		$result2 =  $db->ejecutarConsulta($sql2);
		$intereses = array();
		while ($fila = $db->obtenerFila($result2)) {
			$interes = array('idInteres' => $fila[0],
				'nombre' => $fila[1]);
			array_push($intereses, $interes);
		}
		return $intereses;

	}
	public function estadoRegistro($id, $serviceLogin){
		global $db;
		$idP = $db->proteger($id);
		if($serviceLogin == "Google"){
			$sql1="SELECT * FROM `Usuario` WHERE `idGoogle` = ".$idP.";";
		}else if ($serviceLogin == "Facebook"){
			$sql1="SELECT * FROM `Usuario` WHERE `idFacebook` = ".$idP.";";
		}else{
			echo "Acceso no autorizado";
			exit;
		}
		$result1 =  $db->ejecutarConsulta($sql1);
		$numF = $db->numeroFilas($result1);
		if($numF < 1){
			return 1;
		}else{
			$fila = $db->obtenerFila($result1);
			if(!is_null($fila['fecha_nacimiento']) && !is_null($fila['Ciudad_idCiudad'])){
				$numF2 = sizeof($this->obtenerInteresesUsuario($fila['idUsuario']));
				if($numF2 > 0){
					return 0;
				}else{
					return 2;
				}
			}else{
				return 1;
			}



		}

		return $ciudades;
	}



	public function registrarDatosPeril($user, $serviceLogin){
		global $db;
		if($serviceLogin == "Google"){
			$nombre = $db->proteger($user->getNombre());
			$apellido  = $db->proteger($user->getApellido());
			$fechaNac = $db->proteger($user->getFechaNacimiento());
			$id = $db->proteger($user->getIdGoogle());
			$email  = $db->proteger($user->getEmail());
			$ciudad = $db->proteger($user->getCiudad());

			$sql2="SELECT * FROM `Usuario` WHERE `idGoogle` = ".$id.";";
			$result2 =  $db->ejecutarConsulta($sql2);
			$numF2 = $db->numeroFilas($result2);
			if($numF2==0){
				$sql= "INSERT INTO `Usuario` (`idUsuario`, `nombre`, `apellido`, `fecha_nacimiento`, `idGoogle`, `idFacebook`, `email`, `Referido`, `Ciudad_idCiudad`) VALUES (NULL, '".$nombre."', '".$apellido."', '".$fechaNac."', '".$id."', NULL, '".$email."', NULL, '".$ciudad."');";
				$result =  $db->ejecutarConsulta($sql);
			}else{
				$sql= "UPDATE `Usuario` SET 
				`nombre` = '".$nombre."',
				`apellido`= '".$apellido."',
				`fecha_nacimiento` = '".$fechaNac."', 
				`email`='".$email."',
				`Ciudad_idCiudad` = '".$ciudad."'
				WHERE `idGoogle`= '".$id."';";
				$result =  $db->ejecutarConsulta($sql);
			}
			if($result){
				return 1;
			}
			else
				return -1;


		}else if($serviceLogin == "Facebook"){
			$nombre = $db->proteger($user->getNombre());
			$apellido  = $user->getApellido();
			$fechaNac = $db->proteger($user->getFechaNacimiento());
			$id = $db->proteger($user->getIdFacebook());
			$email  = $db->proteger($user->getEmail());
			$ciudad = $db->proteger($user->getCiudad());
			$sql2="SELECT * FROM `Usuario` WHERE `idFacebook`= ".$id.";";
			$result2 =  $db->ejecutarConsulta($sql2);
			$numF2 = $db->numeroFilas($result2);
			if($numF2<1){
				$sql= "INSERT INTO `Usuario` (`idUsuario`, `nombre`, `apellido`, `fecha_nacimiento`, `idGoogle`, `idFacebook`, `email`, `Referido`, `Ciudad_idCiudad`) VALUES (NULL, '".$nombre."', '".$apellido."', '".$fechaNac."', NULL, '".$id."', '".$email."', NULL, '".$ciudad."');";
				$result =  $db->ejecutarConsulta($sql);
			}else{
				$sql= "UPDATE `Usuario` SET 
				`nombre` = '".$nombre."',
				`apellido`= '".$apellido."',
				`fecha_nacimiento` = '".$fechaNac."', 
				`email`='".$email."',
				`Ciudad_idCiudad` = '".$ciudad."'
				WHERE `idFacebook`= '".$id."';";
				$result =  $db->ejecutarConsulta($sql);
			}
			if($result){
				return 1;
			}else
			return -1;
		}else{
			return -1;
		}
	}


}

?>