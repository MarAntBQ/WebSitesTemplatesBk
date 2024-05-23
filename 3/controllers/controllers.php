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
        $GLOBALS["Facebook-Link"] = "https://www.facebook.com/arteflor2020/";
        $GLOBALS["Twitter-Link"] = "https://twitter.com/F_Arte_Flor";
        $GLOBALS["WhatsApp-Link"] = "https://api.whatsapp.com/send?phone=593967542011&text=%C2%A1Hola,%20te%20comunicas%20con%20Florer%C3%ADa%20Arte%20Flor%20%C2%BFEn%20qu%C3%A9%20te%20podemos%20ayudar?%20Hacemos%20llegar%20tu%20pedido%20en%20el%20lugar%20que%20te%20encuentres.";
        $GLOBALS["Instagram-Link"] = "https://www.instagram.com/arteflorgye";
        $GLOBALS["Youtube-Link"] = "#";
        $GLOBALS["Email-Link"] = "soporte@floreriarteflor.com";
    }
}
class SendMailctr {
    public function mailController($way) {
        if(isset($_POST["controller-action"])) {
           $controller_action = $_POST["controller-action"];
            if ($controller_action == "SendMessage") {
                $name= filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
                $output = "";
                $outputmail = "";
                $outputmailName = "";
                $outputtittle = "";
                $body = "";
                switch ($way) {
                    case "General-Support":
                        $output = "contact"; //where it's going
                        $outputmail = "example@email.com"; //Where it'll be receiving
                        $outputmailName = "Name"; // Name of the Recipient
                        $outputtittle = "Formulario de Contacto | Marbust Sites MBTC®"; // Email Tittle
                        $body = "<h1 style='text-align: center;'>Formulario de Contacto</h1>";
                        $body = $body."<p><strong>Nombre: </strong>$name</p>";
                        $body = $body."<p><strong>Email: </strong><a href='mailto:$email'>$email</a></p>";
                        $body = $body."<p><strong>Telefono: </strong>$phone</p>";
                        $body = $body."<p><strong>Mensaje: </strong>$message</p>";
                        $body = $body."<p><strong>Formulario Creado con la Tecnología de Marbust Sites MBTC®, si tiene dudas o necesita modificaciones contactenos a <a href='mailto:sites@marbust.com'>Nuestro Email de Soporte</strong></p>";
                        break;
                    default:
                        header("Location: home");
                        exit;
                }
                
                require('phpmailer/PHPMailerAutoload.php');
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->CharSet = 'UTF-8';
                $mail->SMTPAuth = true;
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                
                //	===================================================================
                //	JUST EDIT BELOW FIVE LINES
                //	===================================================================
                $mail->Host = "SERVER";					// Enter "mail.my-domain.com"
                $mail->Username = "EMAIL";			// Enter an email address created through cPanel
                $mail->Password = "PASSWORD";						// Enter the email password created through cPanel
                $mail->AddAddress($outputmail, $outputmailName); // Enter the recipient "to" email address
                $mail->Subject = $outputtittle;		// For subject "Any Preferred Email Subject";
                //	===================================================================
                //  DO NOT EDIT BELOW THIS ~~ MODIFY AT YOUR OWN RISK & DO NOT CONTACT SUPPORT
                //  IF YOU NEED HELP, GOOGLE AND LEARN ABOUT PHPMAILER OR CONTACT A PROGRAMMER
                //	===================================================================
                $mail->From = $email;
                $mail->FromName = $name;
                $mail->WordWrap = 50;
                $mail->IsHTML(true);
                $mail->Body = $body; //insert the message body
                $mail->AltBody ="Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
                $mail->SMTPDebug  = 0;								// Change to "2" to see full SMTP connection output 
                
                if(!$mail->Send())
                {
                    $_SESSION["MailerAnswer"] = '<p class="tac fs18px lh2em mb15px mailer-msgs">Lo sentimos pero el Mensaje no pudo ser enviado</p>';
                    header("Location: $output");    
                    exit;
                }
                
                $_SESSION["MailerAnswer"] = '<p class="tac fs18px lh2em mb15px mailer-msgs">Gracias '.$name.', tu mensaje ha sido enviado correctamente.</p>';
                    header("Location: $output");    
                    exit;                   
            }
        }
    }
}

?>