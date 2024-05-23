<?php
class Templatectr {
    public function getPageNames() {
        if (isset($_GET["path"])) {
            switch ($_GET["path"]) {
                case "home":
                    $GLOBALS["Page-Name"] = "Inicio";
                    $GLOBALS["Page-Location"] = "pages/home.php";
                    break;
                default:
                   $GLOBALS["Page-Name"] = "Página no encontrada"; 
                    $GLOBALS["Page-Location"] = "pages/404.php";
            }
        } else {
            $GLOBALS["Page-Name"] = "Inicio";
            $GLOBALS["Page-Location"] = "pages/home.php";
        }
         $GLOBALS["Facebook-Link"] = "https://facebook.com/MarbustTechnologyCompany";
        $GLOBALS["Twitter-Link"] = "https://twitter.com/MarbustTech";
        $GLOBALS["WhatsApp-Link"] = "https://api.whatsapp.com/send?phone=593982345160&text=%C2%A1Hola,%20te%20visito%20desde%20el%20sitio%20web%20de%20*Marbust%20Technology%20Company*%20%C2%A1Me%20gustar%C3%ADa%20tus%20servicios%20o%20productos!";
        $GLOBALS["Instagram-Link"] = "https://instagram.com/marbusttechnology";
        $GLOBALS["Youtube-Link"] = "https://www.youtube.com/channel/UCdVLdxEW8STQq-IP8HTndag/";
        $GLOBALS["Email-Link"] = "mailto:EMAIL";
    }
}

?>