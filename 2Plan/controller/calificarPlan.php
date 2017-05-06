<?php
session_start();
require_once("../dao/PlanDAO.php");
if(isset($_SESSION['idUsuario']) && isset($_POST['idPlan']) && isset($_POST['calificacion']) && is_numeric($_POST['calificacion']) && is_numeric($_POST['idPlan'])){
	$dao = new PlanDAO();
	echo $dao->calificarPlan($_POST['idPlan'], $_SESSION['idUsuario'], $_POST['calificacion']);

}else{
	echo "0";
}
?>