<?php
//Inicializacion del Plugin de conexion con Google
session_start();
require ("config/google.php");
require_once ('google/lib/autoload.php');


$client = new Google_Client();
$client->setClientId($configGoogle['app_id']);
$client->setClientSecret($configGoogle['app_secret']);
$client->setRedirectUri('http://localhost/sw3/swproyect/2Plan/controller/login/loginGoogle.php');
$client->addScope("email");
$client->addScope("profile");
$service = new Google_Service_Oauth2($client);
 //si trae el codigo es por que viene de google y recien inicia sesion
if (isset($_GET['code'])) {
	$client->authenticate($_GET['code']);
	$_SESSION['google'] = $client->getAccessToken();
	//variables obtenidas de la cuenta de google
	$user = $service->userinfo->get();
	$_SESSION['nombre'] = $user->given_name;
	$_SESSION['apellido'] = $user->familyName;
	$_SESSION['idGoogle'] = $user->id;
	$_SESSION['email'] = $user->email;
	$_SESSION['foto'] = $user->picture;

	header("Location:../isRegistered.php");
	exit;
}
//si no trae el codigo y la sesion no esta iniciada significa que necesitamos el link para el login
if (!isset($_SESSION['google']) || !$_SESSION['google']) {
	$authUrl = $client->createAuthUrl();
}


