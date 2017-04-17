<?php
session_start();
require_once("../DAO/UsuarioDAO.php");
$dao = new UsuarioDAO();
if(isset($_SESSION['idUsuario'])){
	$intereses =  $dao->obtenerInteresesUsuario($_SESSION['idUsuario']);
	echo json_encode($intereses);
	
}
else
	echo -2;
	

?>