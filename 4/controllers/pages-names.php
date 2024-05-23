<?php

if (isset($_GET["path"])) {
            switch ($_GET["path"]) {
                case "home":
                    $GLOBALS["Page-Name"] = "Home";
                    break;
                case "about":
                    $GLOBALS["Page-Name"] = "About";
                    break;
                case "services":
                    $GLOBALS["Page-Name"] = "Services";
                    break;
                case "contact":
                   $GLOBALS["Page-Name"] = "Contact";
                    break;
                default:
                   $GLOBALS["Page-Name"] = "Page not found"; 
            }
        } else {
            $GLOBALS["Page-Name"] = "Home";
        }

?>