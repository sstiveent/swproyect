<?php
session_start();
require_once("../dao/UsuarioDAO.php");
$interes = ValidarIntereses($_POST['intereses']);

if(isset($_SESSION['idUsuario'])){
	if(isset($interes)){
		$intereses = array();
		$interesesPost = $_POST['intereses'];
		foreach ($interesesPost as $key => $value) {
			if($value['estado'] == "true")
				array_push($intereses, $value['idInteres']);
		}
		$intereses = array_unique($intereses);
		if(sizeof($intereses)>0){
			
			$dao = new UsuarioDAO();
			$response = $dao->agregarIntereses($_SESSION['idUsuario'], $intereses);
			if($response ==1){
				$_SESSION['intereses']= serialize($dao->obtenerInteresesUsuario($_SESSION['idUsuario']));
				$_SESSION['register'] = 0;
			}
			echo $response;
			
		}else{
			echo -3;
		}
	}else{
		echo 0;
	}
}else
echo -2;
ValidarIntereses($interes){
	if(isset($interes)){
		return $interes;
	} else {
		return null;
	}
}
?>