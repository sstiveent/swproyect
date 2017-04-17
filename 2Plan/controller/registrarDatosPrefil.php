<?php
session_start();
require_once("../dao/UsuarioDAO.php");
require_once("../util/Util.php");
$util = new Util();

if(
	isset($_POST['idCiudad']) &&
	isset($_POST['fechaNac']) &&
	is_numeric($_POST['idCiudad'])
	)
{
	$fecha= date("Y-m-d", strtotime($_POST['fechaNac']));
	$fechaActual = date("Y-m-d");
	$dias = $util->compararFechas($fecha, $fechaActual);
	if($dias <= -4745 && $dias > -36000 ){
		if(isset($_SESSION['idGoogle'])){
			$dao = new UsuarioDAO();
			$user= new Usuario();
			$user->_setNombre($_SESSION['nombre']);
			$user->_setApellido($_SESSION['apellido']);
			$user->_setFechaNacimiento($fecha);
			$user->_setIdGoogle($_SESSION['idGoogle']);
			$user->_setEmail($_SESSION['email']);
			$user->_setCiudad($_POST['idCiudad']);

			$respuesta = $dao->registrarDatosPeril($user, "Google");
			if($respuesta==1){
				$_SESSION['register'] = 2;
				$_SESSION['idUsuario'] = $dao->obtenerIdUsuario($user->getIdGoogle(), "Google");
			}
			echo $respuesta;


		}else if (isset($_SESSION['idFacebook'])){
			$dao = new UsuarioDAO();
			$user= new Usuario();
			$user->_setNombre($_SESSION['nombre']);
			$user->_setApellido($_SESSION['apellido']);
			$user->_setFechaNacimiento($_POST['fechaNac']);
			$user->_setIdFacebook($_SESSION['idFacebook']);
			$user->_setEmail($_SESSION['email']);
			$user->_setCiudad($_POST['idCiudad']);

			$respuesta = $dao->registrarDatosPeril($user, "Facebook");
			if($respuesta==1){
				$_SESSION['register'] = 2;
				$_SESSION['idUsuario'] = $dao->obtenerIdUsuario($user->getIdFacebook(), "Facebook");
			}
			echo $respuesta;
		}else{
			echo -2;
		}
	}else{
		echo -3;
	}
}else{
	echo 0;
}
?>