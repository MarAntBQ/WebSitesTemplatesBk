<?php
session_start();
require_once 'controllers/controllers.php';
echo '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Marbust Framework PHP | '.$PageName.'</title>';
//<meta name = "viewport" content = "width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
include 'includes/head.php';
include 'app/head.php';
echo '
</head>
<body>
<main>';
include $PageLocation;
echo '</main>
<footer>';
include 'includes/footer.php';
echo '</footer>
</body>
</html>';
?>