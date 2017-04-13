<?php
//Inicializacion del Plugin de conexion con Google
session_start();
require ("config/google.php");
require_once ('google/lib/autoload.php');



$client = new Google_Client();
$client->setClientId($configGoogle['app_id']);
$client->setClientSecret($configGoogle['app_secret']);
$client->setRedirectUri('http://2plan.grupodimo.co/controller/login/loginGoogle.php');
$client->addScope("email");
$client->addScope("profile");
$service = new Google_Service_Oauth2($client);

if (isset($_GET['code'])) {
	$client->authenticate($_GET['code']);
	$_SESSION['google'] = $client->getAccessToken();
	//header('Location: ' . filter_var('http://2plan.grupodimo.co', FILTER_SANITIZE_URL));
	header("Location: http://2plan.grupodimo.co/");
	exit;
}
if (isset($_SESSION['google']) && $_SESSION['google']) {
	$client->setAccessToken($_SESSION['google']);
	$user = $service->userinfo->get();
} else {
	$authUrl = $client->createAuthUrl();
}


