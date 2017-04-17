<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario'])){
	if(isset($_POST['idPlan'])&& is_numeric($_POST['idPlan'])){
		$dao=new PlanDAO();
		$response= $dao->obtenerPlan($_POST['idPlan']);
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
?>