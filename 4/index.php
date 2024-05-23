<?php
require_once "controllers/pages-names.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Template 4 | <?php echo $GLOBALS["Page-Name"];?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include 'includes/head-setup.php';    
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
        
        if (isset($_GET["path"])) {
            switch ($_GET["path"]) {
                case "home":
                    include "pages/home.php";
                    break;
                case "about":
                    include "pages/about.php";
                    break;
                case "services":
                    include "pages/services.php";
                    break;
                case "contact":
                    include "pages/contact.php";
                    break;
                default:
                    include "pages/404.php";
            }
        } else {
            include "pages/home.php";
        }

        ?>
    </main>
    <footer>
        <?php
        include 'includes/footer.php';
        ?>
    </footer>
</body>

</html>
