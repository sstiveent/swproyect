<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario'])){
	if(isset($_POST['idPlan'])&& is_numeric($_POST['idPlan'])){
		$dao=new PlanDAO();
		$response1= $dao->obtenerPlan($_POST['idPlan']);
		if(is_array($response1)){

			$response2= $dao->obtenerCalificacionPlan($_POST['idPlan']);
			echo json_encode(array('plan' => $response1, 'calificacion'=>$response2));
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
?>