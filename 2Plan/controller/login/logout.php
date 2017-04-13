<?php
//Cierre de Session
session_start();
//unset(isset($_SESSION['facebook'])? $_SESSION['facebook'] : $_SESSION['google']);
session_destroy();
header('Location: http://2plan.grupodimo.co');