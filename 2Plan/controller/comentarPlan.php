<?php
session_start();
require_once("../dao/PlanDAO.php");
$plan = validarPlan($_POST['idPlan']);
$comentario = validarComentario($_POST['comentario']);
if(isset($_SESSION['idUsuario']) && $plan && $comentario){
	$dao = new PlanDAO();
	echo $dao->comentarPlan($_POST['idPlan'], $_SESSION['idUsuario'], $_POST['comentario']);
}else{
	echo "0";
}

validarComentario($comentario){
    if(isset($comentario) && is_numeric($comentario)){
        return $comentario;
    }else{
        return null;
    }
}
validarPlan($idPlan){
    if(isset($idPlan) && is_numeric($idPlan)){
        return $idPlan;
    } else{
        return null;
    }
}
?>