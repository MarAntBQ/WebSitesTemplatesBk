<?php
class Templatectr {
    public function getPageNames() {
        if (isset($_GET["path"])) {
            switch ($_GET["path"]) {
                case "home":
                    $GLOBALS["Page-Name"] = "Inicio";
                    $GLOBALS["Page-Location"] = "pages/home.php";
                    break;
				case "about":
                    $GLOBALS["Page-Name"] = "¿Quiénes Somos?";
                    $GLOBALS["Page-Location"] = "pages/about.php";
                    break;
				case "services":
                    $GLOBALS["Page-Name"] = "Portafolio de Servicios";
                    $GLOBALS["Page-Location"] = "pages/services.php";
                    break;
				case "contact":
                    $GLOBALS["Page-Name"] = "Contacto";
                    $GLOBALS["Page-Location"] = "pages/contact.php";
                    break;
                default:
                   $GLOBALS["Page-Name"] = "Página no encontrada"; 
                    $GLOBALS["Page-Location"] = "pages/404.php";
            }
        } else {
            $GLOBALS["Page-Name"] = "Inicio";
            $GLOBALS["Page-Location"] = "pages/home.php";
        }
         $GLOBALS["Facebook-Link"] = "https://www.facebook.com/";
         $GLOBALS["Politics-Link"] = "#";
        $GLOBALS["Twitter-Link"] = "https://twitter.com/";
        $GLOBALS["WhatsApp-Link"] = "https://api.whatsapp.com/send?phone=593999999999&text=";
        $GLOBALS["Instagram-Link"] = "https://www.instagram.com/";
        $GLOBALS["Youtube-Link"] = "https://www.youtube.com/";
        $GLOBALS["Email-Link"] = "mailto:soporte@planet-ec.com";
    }
}

class Mailer {
    public function SendM() {
        if (isset($_POST["contactForm"])) {
         $nombre = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        if (empty($nombre)) {
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su nombre</p>";
            header("Location: contact");
            exit;
        }
        $_SESSION["NAME"] = $nombre;
        $email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
        if (empty($email)) {
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su email</p>";
            header("Location: contact");
            exit;
        }
        $_SESSION["EMAIL"] = $email;
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        if (empty($phone)) {
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingres su teléfono</p>";
            header("Location: contact");
            exit;
        }
        $_SESSION["PHONE"] = $phone;
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        if (empty($message)) {
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su mensaje</p>";
            header("Location: contact");
            exit;
        }
        $_SESSION["MESSAGE"] = $message;
        $EmailTittle = "Formulario de Contacto";
        $DestinoEmail = "soporte@planet-ec.com";
        $DestinoName = "Planet iT";
        $body = "<h1 style='text-align: center;'>Contact Form</h1>";
        $body = $body."<p><strong>Name: </strong> $nombre</p>";
        $body = $body."<p><strong>Email: </strong> <a href='mailto:$email'>$email</a></p>";
        $body = $body."<p><strong>Phone: </strong> $phone</p>";
        $body = $body."<p><strong>Message: </strong> $message</p>";
        $body = $body."<p style='text-align: center;'><strong>Form made with Marbust Websites&reg;'s Technology under the Marbust Technology Company License</strong></p>";
        unset($_SESSION["NAME"]);
        unset($_SESSION["EMAIL"]);
        unset($_SESSION["PHONE"]);
        unset($_SESSION["MESSAGE"]);
        
        require('phpmailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
            
        //Aqui viene la magia
         //Aqui viene la magia
         $mail->Host = "SERVER";
            // Enter "mail.my-domain.com"
            $mail->Username = "EMAIL";
            // Enter an email address created through cPanel
            $mail->Password = "PASSWORD";				// Enter the email password created through cPanel
        $mail->AddAddress($DestinoEmail, $DestinoName);
        $mail->Subject = $EmailTittle;
            
        //No editar
        $mail->From = $email;
        $mail->FromName = $name;
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Body = $body; //insert the message body
        $mail->AltBody ="Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
        $mail->SMTPDebug  = 0;								// Change to "2" to see full SMTP connection output 
        
        if(!$mail->Send()) {
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Lo sentimos, pero el mensaje no pudo ser enviado</p>";
            header("Location: contact");
            exit;
        }
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Gracias $nombre, tu mensaje ha sido enviado.</p>";
            header("Location: contact");
            exit;
        
        }
        
    }
}

?>