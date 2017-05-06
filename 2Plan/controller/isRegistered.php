<?php
session_start();
require_once("../dao/UsuarioDAO.php");

$id=isset($_SESSION['google'])? $_SESSION['idGoogle']:$id;
$id=isset($_SESSION['facebook'])? $_SESSION['idFacebook']:$id;
$serviceLogin=isset($_SESSION['google'])?"Google":$serviceLogin;
$serviceLogin=isset($_SESSION['facebook'])?"Facebook":$serviceLogin;
$dao = new UsuarioDAO();
$register = $dao->estadoRegistro($id, $serviceLogin);
if(!is_null($register)){
	$_SESSION['idUsuario'] = $dao->obtenerIdUsuario($id, $serviceLogin);
}
//si estadoRegistro es 0 significa que el registro es completo y debe continuar a home
if($register==0){
	$_SESSION['register']=0;
	$_SESSION['intereses']= serialize($dao->obtenerInteresesUsuario($_SESSION['idUsuario']));
	header("Location:https://2Plan.grupodimo.co/home.php");
}else{
	$_SESSION['register'] = is_numeric($register)? $register: 1;
	header("Location:https://2Plan.grupodimo.co/register.php#!/".$_SESSION['register']);
}


?>