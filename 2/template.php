<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
    <title>Template 2 | <?php Templatectr::pageName(); echo $GLOBALS["PAGENAME"];?></title>
    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="css/marbust-framework-4-min.css">-->
    <!-- SEO Codes -->
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <meta name="author" content="Marbust Technology Company">
    <meta name="copyright" content="© 2019 Marbust Technology Company - All Rights Reserved">
    <!--<script src="js/blockers.js"></script>-->
    <script src="js/menu.js"></script>
    <script src="js/year.js"></script>
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
            switch($_GET["path"]) {
                case "home":
                    include 'pages/home.php';
                    break;
                case "about":
                    include 'pages/about.php';
                    break;
                case "content":
                    include 'pages/content.php';
                    break;
                case "contact":
                    include 'pages/contact.php';
                    break;
                default:
                    include 'pages/404.php';
            }
        } else {
            include 'pages/home.php';
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
