<?php
session_start();
require_once("../dao/PlanDAO.php");

if(isset($_SESSION['idUsuario']) && isset($_POST['idPlan']) && is_numeric($_POST['idPlan']) && isset($_POST['comentario']) && $_POST['comentario'] != ""){
	$dao = new PlanDAO();
	echo $dao->comentarPlan($_POST['idPlan'], $_SESSION['idUsuario'], $_POST['comentario']);
}else{
	echo "0";
}
?>