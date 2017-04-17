<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario'])){
	$dao = new PlanDAO();

	if(isset($_POST['buscar']) && trim($_POST['buscar']) !=""){
		$response = $dao->buscarPlanesRecomendados($_SESSION['idUsuario'], trim($_POST['buscar']));
		if(sizeof($response)>0)
			echo json_encode($response);
		else
			echo "";
	}else{
		$response = $dao->listarPlanesRecomendados($_SESSION['idUsuario']);
		if(sizeof($response)>0)
			echo json_encode($response);
		else
			echo "";
	}
}else{echo -2;}
?>