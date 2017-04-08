<?php
require_once 'facebook/app/start.php';
if (!isset($_SESSION['facebook'])){
	$direccion = $helper->getLoginUrl($configFacebook['scopes']);
	$dir = array('url' => $direccion);
	echo json_encode($dir);
}
?>