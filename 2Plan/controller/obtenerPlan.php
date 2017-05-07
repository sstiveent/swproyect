<?php
session_start();
require_once("../dao/PlanDAO.php");
$idPlan = validarPlan($_POST['idPlan');

if(isset($_SESSION['idUsuario'])){
	if($idPlan){
		$dao=new PlanDAO();
		$response= $dao->obtenerPlan($idPlan);
		if(is_array($response)){
			echo json_encode($response);
		}
		else{
			echo "-3";
		}
	}else{
		echo 0;
	}
	
}else{
	echo -2;
}
validarPlan ($idPlan){
	if(isset($idPlan && is_numeric($idPlan){
		return $idPlan;
	}
	else
	{
		return null;
	}
}
?>