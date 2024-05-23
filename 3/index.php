<?php
session_start();
require_once "controllers/controllers.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="tittle">Template 3 | <?php Templatectr::getPageNames(); echo $GLOBALS["Page-Name"];?></title>
    <?php 

    include "includes/head-setup.php";

    ?>

</head>

<body>
    <header>
        <?php
        include 'includes/header.php';
        ?>
    </header>
    <main>

        <?php
        Templatectr::getPageNames();
        include $GLOBALS["Page-Location"];
        ?>

    </main>
    <footer>
        <?php
        include 'includes/footer.php';
        ?>
    </footer>
</body>

</html>
