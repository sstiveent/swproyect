<?php
require_once("../dao/PlanDAO.php");
if(isset($_POST['idPlan']) && is_numeric($_POST['idPlan'])){
	$dao = new PlanDAO();
	echo json_encode($dao->obtenerComentariosPlan($_POST['idPlan']));
}
?>