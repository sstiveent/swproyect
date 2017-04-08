<?php session_start();?>
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


	<script type="text/javascript" src="resources/js/app.js"></script>
	<script type="text/javascript" src="resources/js/login/loginSer.js"></script>
	<script type="text/javascript" src="resources/js/login/ctlLogin.js"></script>
</head>

<body ng-app="appMaster">

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<div class="masthead clearfix">
					<div class="inner">
						<h1 class="masthead-brand">2Plan</h1>
						<nav>
							<ul class="nav masthead-nav">
								<li class="active"><a href="#">Inicio</a></li>
								<li><a href="#">Nosotros</a></li>
								<li><a href="#">Cont&aacute;ctenos</a></li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="inner cover" ng-controller="loginController" ng-init="obtenerUrls();">
					<h1 class="cover-heading">¿Sin plan?</h1>
					<p class="lead">En 2Plan encuentras un montón de planes para realizar con tu pareja</p>
					<p class="lead">
						<?php if (!isset($_SESSION['facebook']) && !isset($_SESSION['google'])): ?>
							<a href={{facebookUrl.url}} class="btn btn-lg btn-primary">Iniciar sesión con Facebook!</a>
							<br>
							<a href={{googleUrl.url}} class="btn btn-lg btn-danger">Iniciar sesión con Google!</a>

						<?php else: ?>
							<p>
								<?php 
								echo "Bienvenido, ";
								if(isset($_SESSION['facebook']))
        echo "Login con fb"; //$facebook_user->getName(); 
    if(isset($_SESSION['google']))
        echo "Login con google";//$user->name; 
    ?>
</p>
<a href="controller/login/logout.php" class="btn btn-danger">Cerrar sesión</a>
<?php endif; ?>
</p>
</div>

<div class="mastfoot">
	<div class="inner">
		<p> <a href="http://2plan.grupodimo.co">2Plan</a> Todos los derechos reservados &copy; 2017</p>
	</div>
</div>

</div>

</div>

</div>
</body>
</html>