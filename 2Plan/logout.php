<?php
//Cierre de Session
session_start();
session_destroy();
header('Location: index.php');