<?php
require_once 'login/facebook/app/start.php';
require_once 'login/google/app/start.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>2Plan</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style>
		body {
			margin: 100px auto;
			width: 400px;
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>2Plan</h2>
	<h4>Ahora sabrás a donde ir con tu pareja</h4>

	<?php if (!isset($_SESSION['facebook']) && !isset($_SESSION['google'])): ?>
		<a href="<?php echo $helper->getLoginUrl($configFacebook['scopes']); ?>" class="btn btn-primary">Iniciar sesión con Facebook!</a>
		<br>
		<a href="<?php echo $authUrl; ?>" class="btn btn-danger">Iniciar sesión con Google!</a>

	<?php else: ?>
		<p>
			<?php 
			echo "Bienvenido, ";
			if(isset($_SESSION['facebook']))
				echo $facebook_user->getName(); 
			if(isset($_SESSION['google']))
				echo $user->name; 
			?>
		</p>
		<a href="login/logout.php" class="btn btn-danger">Cerrar sesión</a>
	<?php endif; ?>
</body>
</html>