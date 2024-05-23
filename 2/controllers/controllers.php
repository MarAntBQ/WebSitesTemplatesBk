<?php
class Templatectr {
    public function templatecontroller() {
        include 'template.php';
    }
    public function pageName() {
        if (isset($_GET["path"])) {
            switch($_GET["path"]) {
                case "home":
                    $GLOBALS["PAGENAME"] = "Home";
                    break;
                case "about":
                    $GLOBALS["PAGENAME"] = "About";
                    break;
                case "content":
                    $GLOBALS["PAGENAME"] = "Content";
                    break;
                case "contact":
                    $GLOBALS["PAGENAME"] = "Contact";
                    break;
                default:
                    $GLOBALS["PAGENAME"] = "Page not found";
            }
        } else {
           $GLOBALS["PAGENAME"] = "Home";
        }
    }
}
?>