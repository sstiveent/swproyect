<?php 
$page='index';
require_once('redirect.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="2Plan">
	<meta name="author" content="2Plan">
	<link rel="icon" href="">
	<link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
	<title>2Plan</title>
	<!-- Bootstrap core CSS -->
	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="resources/css/cover.css" rel="stylesheet">
	<script type="text/javascript" src="resources/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="resources/js/angular.min.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="resources/js/appLogin.js"></script>
	<script type="text/javascript" src="resources/js/login/loginSer.js"></script>
	<script type="text/javascript" src="resources/js/login/ctlLogin.js"></script>

</head>

<body ng-app="appLogin" ng-include="'view/index/login.php'" style="overflow-x: hidden; overflow-y: hidden;">


</body>
</html>