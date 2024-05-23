<?php
session_start();
require_once 'controllers/controllers.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mega Ecuafarma Natural | <?php Templatectr::getPageNames(); echo $GLOBALS["Page-Name"];?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
    include 'includes/head-setup.php';
    ?>
</head>

<body>
   <i class="fas fa-bars"  id="menu"></i>
    <header>
        <?php
        include 'includes/header.php';
        ?>
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(function() {
        $('#menu').click(function() {
            $('header').toggle('menu-active');
        })
        $('#menu2').click(function() {
            $('header').toggle('menu-active');
        })
        $('header ul li a').click(function() {
            $('header').toggle('menu-active');
        })
    })

</script>
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
