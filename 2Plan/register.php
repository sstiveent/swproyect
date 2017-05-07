<?php 
$page='register';
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
    <link rel="stylesheet" href="resources/css/animation-register.css">
    <script type="text/javascript" src="resources/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="resources/js/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="resources/js/route.js"></script>
    <script type="text/javascript" src="resources/js/animate.js"></script>
    <script type="text/javascript" src="resources/js/appRegister.js"></script>
    <script type="text/javascript" src="resources/js/registro/ctlRegisterData.js"></script>
    <script type="text/javascript" src="resources/js/registro/ctlRegisterInt.js"></script>
    <script type="text/javascript" src="resources/js/registro/registerDataSer.js"></script>
    <script type="text/javascript" src="resources/js/registro/registerIntSer.js"></script>

</head>

<body ng-app="appRegister">
    <div class="{{ pageClass }}" ng-view></div>

</body>
</html>