<?php
require_once("../dao/PlanDAO.php");
$plan = validarPlan($_POST['idPlan']);
if($plan){
	$dao = new PlanDAO();
	echo json_encode($dao->obtenerComentariosPlan($_POST['idPlan']));
}
function validarPlan($idPlan){
    if(isset($idPlan) && is_numeric($idPlan)){
        return $idPlan;
    } else{
        return null;
    }
}
?>