<?php 
$page='home';
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
    <link href="resources/css/home.css" rel="stylesheet">
    <script type="text/javascript" src="resources/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="resources/js/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="resources/js/appHome.js"></script>
    <script type="text/javascript" src="resources/js/route.js"></script>
    <script type="text/javascript" src="resources/js/buscar/buscarSer.js"></script>
    <script type="text/javascript" src="resources/js/buscar/ctlBuscar.js"></script>
    <script type="text/javascript" src="resources/js/plan/planSer.js"></script>
    <script type="text/javascript" src="resources/js/plan/ctlPlan.js"></script>
</head>
<body ng-app="appHome">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <li class="navbar-brand title">2Plan</li>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="logout.php">Cerrar Sesi&oacute;n</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?php if(isset($_SESSION['idUsuario'])):?>
                    <img  src="<?php echo $_SESSION['foto'];?>" alt="profileImage" class="center-block img-circle img-responsive">
                    <p class="name""><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></p>
                    <br>
                    <h5>Intereses</h5>
                    <ul>
                        <?php
                        foreach (unserialize($_SESSION['intereses']) as $key => $value) {
                            echo "<li>".$value['nombre']."</li>";
                        }
                        ?>
                    </ul>
                <?php endif;?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div ng-view></div>
            </div>
        </div>
    </div>

</body>
</html>